<?php

//http://localhost/monBlog/blog/Acceuil/index

define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require (ROOT.'controllers/Validation.php');
require (ROOT.'core/Controller.php');
require (ROOT.'DAL/ArticleGateway.php');
require (ROOT.'DAL/UserGateway.php');
//require (ROOT.'Modele/Article.php');
require (ROOT.'models/connection.php');
//require (ROOT.'Modele/User.php');

$params = explode('/',$_GET['p']);

/*$dsn ='mysql:host=localhost;dbname=dbnakrulic';

$user = "root";
$password = "";

$db = new Connection($dsn,$user,$password);*/

$controller = $params[0];
$action = isset($params[1]) ? $params[1] : 'index';

require('controllers/'.$controller.'.php');
$controller = new $controller;
if (method_exists($controller,$action)){
    unset($params[0]);
    unset($params[1]);
    call_user_func_array(array($controller,$action),$params);
    //$controller->$action();
}
else{
    echo 'error 404';
}

