<?php
declare(strict_types=1);

class Teacher
{
    private int $id;
    private string $name;
    private string $email;

<<<<<<< HEAD
    public function __construct(int $id, string $name, string $email)
=======
    public function __construct(int $id, $name, string $email)
>>>>>>> production
    {
        $this->id=$id;
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