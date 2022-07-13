<?php
declare(strict_types=1);

class group
{
    private int $id;
    private string $name;
    private string $location;
    private int $groupId;

    public function __construct(int $id,string $name, string $location,int $groupId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->groupId = $groupId;
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


    public function getGroupId(): int
    {
        return $this->groupId;
    }


}