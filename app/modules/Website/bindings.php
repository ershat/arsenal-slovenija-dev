<?php

use Illuminate\Support\Facades\App;

App::bind('Website\Repositories\PageRepositoryInterface', 'Website\Repositories\DbPageRepository');
App::bind('Website\Repositories\PostRepositoryInterface', 'Website\Repositories\DbPostRepository');
App::bind('Website\Repositories\MatchSnippetRepositoryInterface', 'Website\Repositories\DbMatchSnippetRepository');
App::bind('Website\Repositories\MatchRepositoryInterface', 'Website\Repositories\DbMatchRepository');
App::bind('Website\Repositories\ForumRepositoryInterface', 'Website\Repositories\DbForumRepository');