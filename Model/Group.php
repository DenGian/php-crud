<?php
declare(strict_types=1);

class group
{
    private int $id;
    private string $name;
    private string $location;
    private int $groupCoachId;


    public function __construct(int $id,string $name,int $groupCoachId,string $location)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->groupCoachId = $groupCoachId;

    }


    public function getGroupId(): int
    {
        return $this->id;
    }

   
    public function getGroupName(): string
    {
        return $this->name;
    }


    public function getGroupLocation(): string
    {
        return $this->location;
    }


    public function getGroupCoachId(): int
    {
        return $this->groupCoachId;
    }




}