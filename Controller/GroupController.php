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
        $groupArray =  $this->DBLoader->getAllGroups(); //getting all info from the groups table

        //delete function
        if(isset($POST['delete'])){                     // if the delete button is pressed
            $this->DBLoader->deleteGroup($POST['delete']); //$POST['delete'] has the value of the id of the selected group
            header('location:index.php?page='.$GET['page']); // auto refresh page so deleted entry is gone
        }

        require 'view/group_page.php'; // load in group pages
    }

}