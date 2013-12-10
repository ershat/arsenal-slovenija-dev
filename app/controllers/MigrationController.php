<?php 

class MigrationController extends BaseController
{

	public function show()
	{
		if (isset($_GET['go'])) {
			
			$archive = Besedila::where('Datum', '>', '2013-11-03')->get();

			var_dump(count($archive));

			foreach ($archive as $i => $item) {

				// Find a description for each of the items
				$desc = Opis::where('BesediloID', $item->BesediloID)->first();

				if (isset($item->Slika)) {
					$photo = '_archive/'.$item->Slika;
				} else {
					$photo = null;
				}

				$newItem = Backend\Models\Post::create([
					'title' => $desc->Naslov,
					'type' => 'news',
					'photo' => $photo,
					'subtitle' => $desc->Podnaslov,
					'summary' => $desc->Povzetek,
					'content' => $desc->Opis,
					'author' => 3,
					'author_alias' => $item->avtorCustom,
					'created_at' => date('Y-m-d H:i:s', strtotime($item->Datum)),
					'updated_at' => date('Y-m-d H:i:s', strtotime($item->Datum))
				]);

			}
		}
	}

}