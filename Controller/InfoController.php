<?php

declare(strict_types=1);

class InfoController
{
    private DatabaseLoader $dbLoader;
    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        if (isset($GET['student'])) { //brian
            $studentID = $GET['student'];
            $studentFetch = $this->dbLoader->getStudentById($studentID);
            //var_dump($studentFetch[0]);
            $student = new Student($studentFetch[0]['id'], $studentFetch[0]['firstname'], $studentFetch[0]['email'], $studentFetch[0]['group_id']);
            $groupFetch = $this->dbLoader->getGroupById($student->getGroupId());
            $groupName = $groupFetch[0]['group_name'];
            $coachFetch = $this->dbLoader->getTeacherById($groupFetch[0]['coach_id']);
            //var_dump($coachFetch);
            require 'View/studentinfo.php';
        } elseif (isset($GET['teacher'])) { //ian
            require 'View/teacherinfo.php';
        } elseif (isset($GET['group'])) { // if they go to group page
            $groupID = $GET['group'];
            $groupFetch = $this->dbLoader->getgroupById($groupID);
            //var_dump($studentFetch[0]);
            $group = new group($groupFetch[0]['id'], $groupFetch[0]['group_name'], $groupFetch[0]['coach_id'], $groupFetch[0]['group_location']);
            $teacherFetch = $this->dbLoader->getTeacherById($group->getGroupCoachId());
            $teacherName = $teacherFetch[0]['coach_name'];
            $students = $this->dbLoader->getAssignedStudentsByGroup($groupID);
            require 'View/groupinfopage.php';
        }
    }
}
