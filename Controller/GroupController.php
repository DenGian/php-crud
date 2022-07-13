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


        require 'view/group_page.php';
    }

}