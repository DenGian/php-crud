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

        //delete function
        if(isset($POST['delete'])){
            $this->DBLoader->deleteGroup($POST['delete']);
        }

        require 'view/group_page.php';
    }

}