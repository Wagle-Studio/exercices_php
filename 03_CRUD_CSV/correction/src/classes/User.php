<?php

class User
{
    private string $id;
    private string $email;
    private string $password;

    public function __construct(string $email, string $password, string $id = null)
    {
        $this->id = $id ?? uniqid('user_');
        $this->email = $email;
        $this->password = $password;
    }

    public function toArray(): array
    {
        return [$this->id, $this->email, $this->password];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}
