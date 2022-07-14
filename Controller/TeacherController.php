<?php
declare(strict_types = 1);

class TeacherController
{
    private databaseLoader $databaseLoader;

    public function __construct(databaseLoader $databaseLoader)
    {
        $this->databaseLoader=$databaseLoader;
    }
    public function render(array $GET, array $POST)
    {


        require 'View/teacher.php';
    }
}