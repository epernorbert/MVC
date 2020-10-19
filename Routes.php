<?php

require 'AutoLoader.php';

View::set('index.php', function () {
	IndexController::CreateView('Index');
	Mobile::getMobiles();
});

View::set('about-us', function () {
	AboutUsController::CreateView('AboutUs');
});

View::set('admin', function () {
	AdminController::CreateView('Admin');
});

View::set('add', function () {
	AdminController::insertMobile($brand, $type, $color);		
});

/*if(!in_array($_GET['url'], View::$validRoute)){
	echo 'Invalid route!';
}*/

?>