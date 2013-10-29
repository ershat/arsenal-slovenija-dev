<?php namespace Backend\Services;

use Image;
use Backend\Models\Post as Post;
use Request;

class ImageUploadService
{

	public static function make($start_path, $input)
	{

		$currentDate = date('Y/m/d');
		$start_path .= $currentDate;

		if (!file_exists($start_path)){
			mkdir($start_path, 0777, true);
		}

		$sizes = new \stdClass;
		$sizes->big = 960;
		$sizes->med = 300;
		$sizes->sm = 130;

		// Check photo name for duplicates
		$originalPhotoName = $input->getClientOriginalName();

		if (file_exists($start_path . '/' . $originalPhotoName)){
			$originalPhotoName = date('YmdHis') . '_' . $originalPhotoName;
		}

		// Move the file
		$input->move($start_path, $originalPhotoName);

		// Get the photo and resize it
		$photo = Image::make($start_path . '/' . $originalPhotoName);

		$photo->resize($sizes->big, null, true)->save($start_path.'/big_'.$originalPhotoName);
		$photo->resize($sizes->med, null, true)->save($start_path.'/med_'.$originalPhotoName);
		$photo->resize($sizes->sm, null, true)->save($start_path.'/sm_'.$originalPhotoName);

		return $currentDate.'/'.$originalPhotoName;
	}

	/**
	*
	* Ajax upload
	*
	**/
	public static function make_ajax($start_path, $file)
	{

		// HTTP headers for no cache etc
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");

		// Settings
		$targetDir = public_path().'/images/gallery/'.date('Y/m/d');

		$cleanupTargetDir = false; // Remove old files
		$maxFileAge = 20 * 3600; // Temp file age in seconds

		// 20 minutes execution time
		@set_time_limit(20 * 60);

		// Uncomment this one to fake upload time
		// usleep(5000);

		// Get parameters
		$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
		$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
		$fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

		// Clean the fileName for security reasons
		$fileName = preg_replace('/[^\w\._]+/', '_', $fileName);

		// Make sure the fileName is unique but only if chunking is disabled
		if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
			$ext = strrpos($fileName, '.');
			$fileName_a = substr($fileName, 0, $ext);
			$fileName_b = substr($fileName, $ext);

			$count = 1;
			while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
				$count++;

			$fileName = $fileName_a . '_' . $count . $fileName_b;
		}

		$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

		// Create target dir
		if (!file_exists($targetDir))
			@mkdir($targetDir, 0777, true);

		// Look for the content type header
		if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
			$contentType = $_SERVER["HTTP_CONTENT_TYPE"];

		if (isset($_SERVER["CONTENT_TYPE"]))
			$contentType = $_SERVER["CONTENT_TYPE"];

		// Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
		if (strpos($contentType, "multipart") !== false) {
			if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
				// Open temp file
				$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
				if ($out) {
					// Read binary input stream and append it to temp file
					$in = @fopen($_FILES['file']['tmp_name'], "rb");

					if ($in) {
						while ($buff = fread($in, 4096))
							fwrite($out, $buff);
					} else
						die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
					@fclose($in);
					@fclose($out);
					@unlink($_FILES['file']['tmp_name']);
				} else
					die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
			} else
				die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
		} else {
			// Open temp file
			$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
			if ($out) {
				// Read binary input stream and append it to temp file
				$in = @fopen("php://input", "rb");

				if ($in) {
					while ($buff = fread($in, 4096))
						fwrite($out, $buff);
				} else
					die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

				@fclose($in);
				@fclose($out);
			} else
				die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
		}

		// Check if file has been uploaded
		if (!$chunks || $chunk == $chunks - 1) {
			// Strip the temp .part suffix off 
			rename("{$filePath}.part", $filePath);
			$uploaded = true;
		} else {
			$uploaded = false;
		}

		if ($uploaded) {

			$dbFolder = str_replace(public_path(), '', $filePath);
			$dbFolder = str_replace('\\'.$fileName, '', $dbFolder);

			// Post
			$post = Post::find(Request::get('postId'));
			var_dump($post);

			$creatingImage = $post->gallery()->create([
				'folder' => $dbFolder,
				'filename' => $fileName
			]);

			if ($creatingImage){

				$sizes = new \stdClass;
				$sizes->big = 960;
				$sizes->med = 300;
				$sizes->sm = 130;

				// Get the photo and resize it
				$photo = Image::make(public_path().'/'.$dbFolder . '/' . $fileName);

				$photo->resize($sizes->big, null, true)->save(public_path().'/'.$dbFolder.'/big_'.$fileName);
				$photo->resize($sizes->med, null, true)->save(public_path().'/'.$dbFolder.'/med_'.$fileName);
				$photo->resize($sizes->sm, null, true)->save(public_path().'/'.$dbFolder.'/sm_'.$fileName);

			} else {
				unlink($filePath);
			}
		}

		die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');

	}

}