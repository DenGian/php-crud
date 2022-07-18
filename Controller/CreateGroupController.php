<?php


declare(strict_types=1);

class CreateGroupController
{
    private DatabaseLoader $dbLoader;

    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }

    public function render(array $GET, array $POST)
    {
        $groupArray = $this->dbLoader->getAllGroups();
        //var_dump($groupArray[0]);
        if (isset($POST['submitNewGroup'])) {
            $succes = $this->dbLoader->createNewGroup($POST['Group-name'], $POST['coachId'], $POST['location']);
        }
        require 'View/creategrouppage.php';
    }
}