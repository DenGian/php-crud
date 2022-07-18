<?php

declare(strict_types=1);
class CreateTeacherController
{
    private DatabaseLoader $dbLoader;
    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    public function render(array $GET, array $POST)
    {
        //var_dump($groupArray[0]);
        if (isset($POST['submitNewTeacher'])) {
            $succes = $this->dbLoader->createNewTeacher($POST['coach_name'], $POST['email']);
        }
        require 'View/createteacherpage.php';
    }
}

