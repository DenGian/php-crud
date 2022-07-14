<?php
declare(strict_types=1);
require_once "vendor/autoload.php";
//include all your model files here
require 'Model/User.php';
require 'Model/DatabaseLoader.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}elseif(isset($_GET['page']) && $_GET['page'] === 'students') {
    $controller = new StudentsController();
}elseif(isset($_GET['page']) && $_GET['page'] === 'coach') {
    $controller = new TeacherController();
}elseif(isset($_GET['page']) && $_GET['page'] === 'groups') {
    $controller = new GroupController();
}


$controller->render($_GET, $_POST);