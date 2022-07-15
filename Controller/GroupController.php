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
        $groupArray =  $this->DBLoader->getAllGroups();




        require 'view/group_page.php';
    }

}