<?php 

View::composer('Website::_partials.header', 'Website\Composers\WebsiteHeaderComposer');
View::composer('Website::homepage.join', 'Website\Composers\WebsiteJoinUsComposer');
View::composer('Website::homepage.matches', 'Website\Composers\WebsiteMatchesComposer');
View::composer('Website::homepage.forum', 'Website\Composers\WebsiteForumComposer');