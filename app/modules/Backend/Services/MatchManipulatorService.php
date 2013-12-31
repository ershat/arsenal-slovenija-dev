<?php namespace Backend\Services;

use Backend\Repositories\MatchRepositoryInterface;
use Backend\Services\ImageUploadService as ImageUpload;
use Backend\Models\Match as Match;


class MatchManipulatorService {

	protected $match;

	public function __construct(MatchRepositoryInterface $match)
	{
		$this->match = $match;
	}

	public static function create($input, $homeTeamImage = null, $awayTeamImage = null)
	{
		$input['time'] = $input['date'].' '.$input['time'];

		if (isset($homeTeamImage)) {
			$input['home_team_image'] = ImageUpload::make(public_path().'/images/matches/', $homeTeamImage);
		}

		if (isset($awayTeamImage)) {
			$input['away_team_image'] = ImageUpload::make(public_path().'/images/matches/', $awayTeamImage);
		}

		$match = Match::create($input);

		return $match;
	}

	public static function update($input, $id, $homeTeamImage = null, $awayTeamImage = null)
	{
		$match = Match::find($id);

		$input['time'] = $input['date'].' '.$input['time'];

		if (isset($homeTeamImage)) {
			$input['home_team_image'] = ImageUpload::make(public_path().'/images/matches/', $homeTeamImage);
		}

		if (isset($awayTeamImage)) {
			$input['away_team_image'] = ImageUpload::make(public_path().'/images/matches/', $awayTeamImage);
		}

		$match->update($input);

		return $match;
	}

	public static function updateSingle($name, $value, $id)
	{
		$match = Match::find($id);
		$match->{$name} = $value;

		return $match->save();
	}


}