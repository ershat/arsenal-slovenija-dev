<?php namespace Website\Services\Forum;

use DB;
use Carbon\Carbon;

class Repository
{

	/**
	 * @var Array
	 */
	protected $topicsFields = ['tid','last_poster_id','title_seo','title', 'last_post'];

	/**
	 * Get posts
	 * @param  integer $count 
	 * @return Backend\Models\Post
	 */
	public function get($count)
	{
		$topics = DB::connection('arsenal.slovenija.forum')->table('topics')->orderBy('last_post', 'desc')->take($count)->get();

		foreach ($topics as $index => $post) {
			// Get data of the member
			$member = DB::connection('arsenal.slovenija.forum')->table('members')->whereMemberId($post->last_poster_id)->pluck('members_display_name');

			$topics[$index]->member_name = $member;
			$topics[$index]->link = 'http://forum.arsenal-slovenija.si/index.php?/topic/'.$post->tid.'-'.$post->title_seo.'/page__view__getlastpost';
			$topics[$index]->post_date = Carbon::createFromTimestamp($post->last_post)->addHours(1);
		}

		return $topics;
	}

}