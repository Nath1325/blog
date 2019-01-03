<?php

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require (ROOT.'Control/Validation.php');
require (ROOT.'Modele/Article.php');
require (ROOT.'Modele/connection.php');
require (ROOT.'Modele/User.php');

$param = explode('/',$_GET['p']);

print_r($param);