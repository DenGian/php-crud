<?php
declare(strict_types=1);

class teacher
{
    private int $id;
    private string $name;
    private string $email;

    public function __construct(string $name, string $email)
    {
        $this->name=$name;
        $this->email=$email;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->name;
    }
}