<?php namespace Website\Repositories;

use DB;
use Carbon\Carbon;

class DbForumRepository implements ForumRepositoryInterface {

	public function getPosts($limit = 5)
	{
		// Get topics
		$topics = DB::connection('arsenal.slovenija.forum')
										->table('topics')
										->orderBy('last_post', 'desc')
										->take($limit)
										->get(['tid','last_poster_id','title_seo','title', 'last_post']);

		foreach ($topics as $index => $post) {
			// Get data of the member
			$member = DB::connection('arsenal.slovenija.forum')
									->table('members')
									->whereMemberId($post->last_poster_id)
									->pluck('members_display_name');

			$topics[$index]->member_name = $member;
			$topics[$index]->link = 'http://forum.arsenal-slovenija.si/index.php?/topic/'.$post->tid.'-'.$post->title_seo.'/page__view__getlastpost';
			$topics[$index]->post_date = Carbon::createFromTimestamp($post->last_post)->addHours(1);
		}

		return $topics;
	}

}