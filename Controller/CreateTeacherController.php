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
        $coachArray = $this->dbLoader->getAllGroups();
        //var_dump($groupArray[0]);
        if (isset($POST['submitNewCoach'])) {
            $succes = $this->dbLoader->createNewCoach($POST['coach_name'], $POST['email']);
        }
        require 'View/createteacherpage.php';
    }
}

