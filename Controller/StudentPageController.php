<?php
declare(strict_types = 1);
class StudentPageController{
    private DatabaseLoader $dbLoader;

    public function __construct(){
        $this->dbLoader = new DatabaseLoader();
    }
    public function render(array $GET, array $POST){
        $lalaArray=[];
        $lala = $this->dbLoader->getConnection()->query("SELECT * FROM students");
        while ($row = $lala->fetch()){
           $lalaArray[$row[0]] = [
            'name' => $row[1],
            'email' => $row[2],
            'group_id' => $row[3]
           ];
        }
        var_dump($lalaArray);


        require 'View/studentpage.php';
    }
}