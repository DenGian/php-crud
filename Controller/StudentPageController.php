<?php

declare(strict_types=1);
class StudentPageController
{
    private DatabaseLoader $dbLoader;

    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    public function render(array $GET, array $POST)
    {
        $lalaArray = [];
        $lala = $this->dbLoader->getConnection()->query("SELECT * FROM students");
        while ($row = $lala->fetch()) {
            $lalaArray[] = new Student($row[0], $row[1], $row[2], $row[3]);
        }

        #var_dump($lalaArray);
        if (isset($POST['deleteStudent'])) {
            $this->dbLoader->deleteStudent($POST['deleteStudent']);
            $lalaArray = [];
            $lala = $this->dbLoader->getConnection()->query("SELECT * FROM students");
            while ($row = $lala->fetch()) {
                $lalaArray[] = new Student($row[0], $row[1], $row[2], $row[3]);
            }
        }
        //  var_dump($lalaArray);


        require 'View/studentpage.php';
    }
}
