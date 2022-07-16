<?php

declare(strict_types=1);
class CreateStudentController
{
    private DatabaseLoader $dbLoader;
    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    public function render(array $GET, array $POST)
    {

        require 'View/createstudentpage.php';
    }
}
