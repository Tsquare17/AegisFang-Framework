<?php

$route->get([
	'/' => 'Controller::index'
]);

$route->post([
	'/' => 'Controller::store'
]);

$route->get([
	'/about' => function() {
		return 'how bout dat';
	}
]);