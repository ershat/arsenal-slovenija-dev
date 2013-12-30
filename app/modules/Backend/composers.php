<?php 

View::composer('Backend::pages.sidebar', 'Backend\Composers\PagesSidebarComposer');
View::composer('Backend::pages.form', 'Backend\Composers\PagesFormComposer');

View::composer('Backend::posts.sidebar', 'Backend\Composers\PostsSidebarComposer');
View::composer('Backend::posts.form', 'Backend\Composers\PostsFormComposer');

View::composer('Backend::matches.sidebar', 'Backend\Composers\MatchesSidebarComposer');
View::composer('Backend::matches.form', 'Backend\Composers\MatchesFormComposer');

View::composer('Backend::dashboard.index', 'Backend\Composers\PostsDashboardComposer');