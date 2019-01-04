<?php

//http://localhost/monBlog/blog/Acceuil/index

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require (ROOT.'controllers/Validation.php');
require (ROOT.'core/Controller.php');
require (ROOT.'DAL/ArticleGateway.php');
require (ROOT.'DAL/UserGateway.php');
//require (ROOT.'Modele/Article.php');
//require (ROOT.'Modele/connection.php');
//require (ROOT.'Modele/User.php');

$params = explode('/',$_GET['p']);


$controller = $params[0];
$action = isset($params[1]) ? $params[1] : 'index';

require('controllers/'.$controller.'.php');
$controller = new $controller;
if (method_exists($controller,$action)){
    $controller->$action();
}
else{
    echo 'error 404';
}

