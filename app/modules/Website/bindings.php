<?php 

App::bind('Website\Repositories\PageRepositoryInterface', 'Website\Repositories\DbPageRepository');
App::bind('Website\Repositories\PostRepositoryInterface', 'Website\Repositories\DbPostRepository');