<?php

require 'AutoLoader.php';

View::set('index.php', function () {
	IndexController::CreateView('Index');	
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

View::set('delete', function () {		
	AdminController::deleteMobile(Controller::getUrl());
});

View::set('mobile-id', function () {	
	MobileController::CreateView('Mobile');		
});

if(!in_array($_GET['url'], View::$validRoute)){
	echo 'Invalid route!';
}

?>