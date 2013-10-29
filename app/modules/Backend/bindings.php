<?php 

App::bind('Backend\Repositories\PageRepositoryInterface', 'Backend\Repositories\DbPageRepository');
App::bind('Backend\Repositories\PostRepositoryInterface', 'Backend\Repositories\DbPostRepository');
App::bind('Backend\Repositories\ImageRepositoryInterface', 'Backend\Repositories\DbImageRepository');