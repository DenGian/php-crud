<?php
declare(strict_types=1);

class GroupController
{
    private DatabaseLoader $DBLoader;

    public function __construct($DBLoader)
    {
       $this->DBLoader = $DBLoader;

    }
    public function render(array $GET, array $POST):void
    {
      
        $sqlGroupTable = $this->DBLoader->getConnection()->query("SELECT * FROM `groups`");
        $groupArray = [];
        while ($row = $sqlGroupTable->fetch()) {
            $groupArray[] = new group($row[0], $row[1], $row[2], $row[3]);
        }

            $sqlCoachName = $this->DBLoader->getConnection()->query("select * from coaches where id = (select coach_id from `groups` limit 1)");
            $coachArray = [];
            while ($row = $sqlCoachName->fetch()){
                $coachArray[]= new Teacher($row[0], $row[1], $row[2]);
            }



        require 'view/group_page.php';
    }

}