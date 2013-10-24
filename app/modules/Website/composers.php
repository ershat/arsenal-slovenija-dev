<?php 

View::composer('Website::_partials.header', 'Website\Composers\WebsiteHeaderComposer');
View::composer('Website::homepage.join', 'Website\Composers\WebsiteJoinUsComposer');