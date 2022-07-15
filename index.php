<?php

declare(strict_types=1);
require_once "vendor/autoload.php";
//include all your model files here
require 'Model/User.php';
require 'Model/DatabaseLoader.php';
require 'Model/Teacher.php';
require 'Model/Student.php';
#require 'Model/Group.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/StudentPageController.php';
require 'Controller/EditStudentPage.php';
#require 'Controller/TeacherController.php';
#require 'Controller/GroupController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$dbloader = new DatabaseLoader();
$controller = new HomepageController();
if (isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'student') {
    $controller = new StudentPageController($dbloader);
} elseif (isset($_GET['page']) && $_GET['page'] === 'coach') {
    $controller = new TeacherController();
} elseif (isset($_GET['page']) && $_GET['page'] === 'groups') {
    $controller = new GroupController();
} elseif (isset($_GET['page']) && $_GET['page'] === "editstudentspage") {
    $controller = new EditStudentPage($dbloader);
}


$controller->render($_GET, $_POST);
