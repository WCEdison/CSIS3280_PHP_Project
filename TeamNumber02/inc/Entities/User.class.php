<?php

class User {
    private $id = 0;
    private $username = "";
    private $full_name = "";
    private $password = "";
    private $email = "";

    function getId(): int {
        return $this->id;
    }

    function getUsername(): string {
        return $this->username;
    }

    function getFullName(): string {
        return $this->full_name;
    }

    function getPassword(): string {
        return $this->password;
    }

    function getEmail(): string {
        return $this->email;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function setFullName(string $full_name): void {
        $this->full_name = $full_name;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    function verifyPassword(string $passwordToVerify): bool {
        return password_verify($passwordToVerify, $this->getPassword());
    }
}




?>