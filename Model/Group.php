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


    public function getId(): int
    {
        return $this->id;
    }

   
    public function getName(): string
    {
        return $this->name;
    }


    public function getLocation(): string
    {
        return $this->location;
    }


    public function getGroupCoachId(): int
    {
        return $this->groupCoachId;
    }


}