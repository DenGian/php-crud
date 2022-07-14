<?php declare(strict_types = 1);
class Student extends Teacher{
    private int $id;
    private string $name;
    private string $email;
    private int $group_id;
    private DatabaseLoader $DBLoader;

    public function __construct(int $group_id){
        $this->group_id = $group_id;
        $this->DBLoader = new DatabaseLoader();
        parent::__construct($id, $name, $email);
    }

    public function getId(): int {
        return $this->id;
        }
    public function getName(): string {
        return $this->name;
        }
    public function getEmail(): string {
        return $this->email;
        }
    public function getGroupId(): int {
        return $this->group_id;
        }
}