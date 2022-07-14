<?php declare(strict_types = 1);
class Student extends Teacher{
    private int $id;
    private string $name;
    private string $email;
    private ?int $group_id;

    public function __construct(int $id, string $name, string $email, ?int $group_id){
        parent::__construct($id, $name, $email);
        $this->group_id = $group_id;
       
    }

    // public function getId(): int {
    //     return $this->id;
    //     }
    // public function getName(): string {
    //     return $this->name;
    //     }
    // public function getEmail(): string {
    //     return $this->email;
    //     }
    public function getGroupId(): int {
        return $this->group_id;
        }
}