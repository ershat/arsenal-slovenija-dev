<?php 

class MigrationController extends BaseController
{

	public function show()
	{
		if (isset($_GET['go'])) {
			
			$archive = Besedila::where('Datum', '>', '2013-11-03')->get();

			var_dump(count($archive));

			// foreach ($archive as $i => $item) {

			// 	if (isset($item->Slika)) {
			// 		$heroPhoto = '_archive/'.$item->Slika;
			// 	} else {
			// 		$heroPhoto = null;
			// 	}

			// 	$newItem = N3\Neo\Models\Admin\Text::create([
			// 		'name' => $item->Ime,
			// 		'type' => 'news',
			// 		'hero_photo' => $heroPhoto,
			// 		'creator' => 99,
			// 		'updator' => 99,
			// 		'created_at' => date('Y-m-d H:i:s', strtotime($item->Datum)),
			// 		'updated_at' => date('Y-m-d H:i:s', strtotime($item->Datum))
			// 	]);

			// 	$newItem = N3\Neo\Models\Admin\Text::find($newItem->id);

			// 	// Find a description for each of the items
			// 	$descs = Opis::where('BesediloID', $item->BesediloID)->get();

			// 	foreach ($descs as $j => $desc) {
					
			// 		// Switch to lcase langs
			// 		if ($desc->Jezik == 'Sl') {
			// 			$desc->Jezik = 'si';
			// 		}

			// 		$newDesc = N3\Neo\Models\Admin\Text\Locale::create([
			// 			'text_id' => $newItem->id,
			// 			'active' => 1,
			// 			'title' => $desc->Naslov,
			// 			'subtitle' => $desc->Podnaslov,
			// 			'summary' => $desc->Povzetek,
			// 			'data' => $desc->Opis,
			// 			'locale' => strtolower($desc->Jezik),
			// 			'creator' => 99,
			// 			'updator' => 99
			// 		]);

			// 	}

			// 	// Find photos for item
			// 	$photos = Slika::where('BesediloID', $item->BesediloID)->get();

			// 	foreach ($photos as $j => $photo) {
			// 		// Create media
			// 		$media = N3\Neo\Models\Admin\Media::create([
			// 			'folder' => '/media/images/gallery/_archive',
			// 			'filename' => $photo->Datoteka,
			// 			'extension' => 'jpg',
			// 			'size' => 0,
			// 			'creator' => 99,
			// 			'updator' => 99
			// 		]);

			// 		$newItem->media()->attach($media->id, [
			// 			'position' => $photo->Polozaj,
			// 			'type' => 'gallery',
			// 			'creator' => 99,
			// 			'updator' => 99
			// 		]);

			// 	}

			}
	}

}