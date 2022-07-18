<?php

declare(strict_types=1);

class EditGroupPage
{
    private DatabaseLoader $dbLoader;

    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }

    public function render(array $GET, array $POST)
    {
        $selectedGroup = $this->dbLoader->getGroupById($GET['group']);
//        var_dump($selectedGroup);
        $selectedGroupId = $selectedGroup[0]['id'];
        $selectedGroupName = $selectedGroup[0]['group_name'];
        $selectedGroupCoachId = $selectedGroup[0]['coach_id'];
        $selectedGroupLocation = $selectedGroup[0]['group_location'];
        $teacherFetch = $this->dbLoader->getAllTeachers();
        if (isset($POST['updateGroup'])) {
            $selectedGroupName = $_POST['newGroupName'];
            $selectedGroupCoachId = $_POST['newGroupCoachId'];
            $selectedGroupLocation = $_POST['newLocation'];
            $succes = $this->dbLoader->updateGroup($selectedGroupId, $selectedGroupName, $selectedGroupCoachId, $selectedGroupLocation);
        }
        require 'View/editgroup_page.php';
    }
}

