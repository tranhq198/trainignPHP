<?php

require 'model/connect_db.php';
require 'common/function.php';
require 'controllers/AuthController.php';
require 'controllers/HomeController.php';

$act = isset($_GET['act']) && $_GET['act'] != '' ? $_GET['act'] : 'home@index';

$act = explode( '@', $act);
// get controllers name
$controller = $act[0];
// get method to execute
$method = $act[1];

if($controller == 'auth') {
    $controller = new AuthController();
    $controller->$method();
    die();
}

if(!checkLogin()) {
    redirect('?act=auth@login');
}

if($controller == 'home') {
    $controller = new HomeController();
    $controller->$method();
    die();
}

echo '<h1>Controller not found!</h1>';