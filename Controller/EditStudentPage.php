<?php

declare(strict_types=1);
class EditStudentPage
{
    private DatabaseLoader $dbLoader;
    public function __construct(DatabaseLoader $dbLoader)
    {
        $this->dbLoader = $dbLoader;
    }
    public function render(array $GET, array $POST)
    {
        require 'View/editstudentpage.php';
    }
}
