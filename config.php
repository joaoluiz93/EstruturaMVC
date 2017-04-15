<?php 

require 'environment.php';

define("BASE_URL", "http://localhost/estruturamvc");

global $config;
$config = array();
if (ENVIRONMENT == "development") {
	$config['dbname'] = 'blog';
	$config['dbhost'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'blog';
	$config['dbhost'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

 ?>