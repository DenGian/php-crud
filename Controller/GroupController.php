<?php
declare(strict_types=1);

class GroupController
{
    private database $databaseLoader;

    public function __construct()
    {
        $this->databaseLoader = $databaseLoader;
    }

    public function render(array $GET, array$POST)
    {
        $sqlGroupTable = $this->databaseLoader->getConnection()->query("SELECT * FROM groups");
        $groupArray = [];
        while ($row = $sqlGroupTable->fetch()) {
            $groupArray[] = new group($row[0], $row[1], $row[2], $row[3]);
        }
        require 'view/group_page.php';
    }

}