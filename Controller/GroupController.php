<?php
declare(strict_types=1);

class GroupController
{
    private DatabaseLoader $DBLoader;

    public function __construct()
    {
       $this->DBLoader = new DatabaseLoader();

    }
    public function render(array $GET, array $POST):void
    {
        $DBLoader = new DatabaseLoader();
        $sqlGroupTable = $this->DBLoader->getConnection()->query("SELECT * FROM `groups`");
        $groupArray = [];
        while ($row = $sqlGroupTable->fetch()) {
            $groupArray[] = new group($row[0], $row[1], $row[2], $row[3]);
        }
        require 'view/group_page.php';
    }

}