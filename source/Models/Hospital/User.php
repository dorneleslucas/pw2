<?php

namespace source\Models\Hospital;

class User
{
    private $name;
    private $email;
    private $id; 
    private $password; 

    public function __construct (?int $id = null, ?string $name = null, ?string $email = null, ?string $password = null)
    {
        //echo "Olá, User!";
        $this->name = $name;
        $this->email = $email;
        $this->id = $id; 
        $this->password = $password; 
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getId(): ?int 
    {
        return  $this->id; 
    }

    public function getPassword(): ?int  
    { 
        return $this->password; 
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setId(int $id): void 
    { 
        $this->id = $id; 
    }

    public function setPassword(int $password): void 
    { 
        $this-> password = $password; 
    }

    public function showUser ()
    {
        echo "Id: {$this->id}, {$this->name}! E-mail: {$this->email} Senha: {$this->password} ";
    }

}