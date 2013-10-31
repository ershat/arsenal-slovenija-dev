jQuery(document).ready(function($) {
	
	/**
	*
	* TinyMCE
	*
	**/
	tinymce.init({
		selector:'textarea#content',
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor"
		],
		relative_urls: false,
		style_formats: [
			{
				title: 'Image Left', selector: 'img',
				classes: 'thumbnail pull-left img-responsive',
				styles: {
					'margin': '0 10px 10px 0'
				}
			},
			{
				title: 'Image Right', selector: 'img', 
				classes: 'thumbnail pull-right img-responsive',
				styles: {
					'margin': '0 0 10px 10px'
				}
			}
		],
	  external_filemanager_path:"/assets/vendor/filemanager/",
		filemanager_title:"Filemanager" ,
		external_plugins: { "filemanager" : "/assets/vendor/filemanager/plugin.min.js"}
	});

	/**
	*
	* Confirm delete
	*
	**/
	$("a[data-toggle=confirm]").click(function(e){
		e.preventDefault();

		if (confirm("Are you sure?")){
			$("#deleteTrigger").submit();
		}

		return false;
	});

	/**
	*
	* Plupload
	*
	**/
	
	// Custom example logic
	var uploader = new plupload.Uploader({
		runtimes : 'gears,html5,flash,silverlight,browserplus',
		browse_button : 'pickfiles',
		container : 'container',
		max_file_size : '1gb',
		url : '/backend/gallery?postId=' + $('#container').data('postId'),
		flash_swf_url : '/assets/vendor/plupload/js/plupload.flash.swf',
		silverlight_xap_url : '/assets/vendor/plupload/js/plupload.silverlight.xap'
	});

	uploader.bind('Init', function(up, params) {
		//$('#filelist').html("<div>Current type of upload: " + params.runtime + "</div>");
	});

	uploader.init();

	uploader.bind('FilesAdded', function(up, files) {
		$.each(files, function(i, file) {
			$('#filelist').append(
				'<div id="' + file.id + '" class="well well-sm">' +
				file.name + ' (' + plupload.formatSize(file.size) + ') <b></b>' +
			'</div>');
			uploader.start();
		});

		up.refresh(); // Reposition Flash/Silverlight
	});

	uploader.bind('UploadProgress', function(up, file) {
		$('#' + file.id + " b").html('<span class="label label-default">'+file.percent+'%</span>');
	});

	uploader.bind('Error', function(up, err) {
		$('#filelist').append("<div>Error: " + err.code +
			", Message: " + err.message +
			(err.file ? ", File: " + err.file.name : "") +
			"</div>"
		);

		up.refresh(); // Reposition Flash/Silverlight
	});

	uploader.bind('FileUploaded', function(up, file) {
		$('#' + file.id + " b").html('<span class="label label-success">DONE</span>');
	});

	/**
	*
	* Automatic tab loading if hash exists
	*
	**/

	$('a[data-toggle=tab]').click(function(){
		window.location.hash = $(this).attr('href');
	});

	if (window.location.hash != ''){
		var hashArray = window.location.hash.split('/');

		for (var i = 0; i < hashArray.length; i++) {
			if (i == 0){
				$('a[href='+hashArray[i]+']').tab('show');
			} else {
				$('a[href=#'+hashArray[i]+']').tab('show');
			}
		};
		
	}

});