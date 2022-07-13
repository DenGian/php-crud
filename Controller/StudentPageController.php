<?php
declare(strict_types = 1);
class StudentPageController{
    private DatabaseLoader $dbLoader;

    public function __construct(){
        $this->dbLoader = new DatabaseLoader();
    }
    public function render(array $GET, array $POST){




        require 'View/studentpage.php';
    }
}