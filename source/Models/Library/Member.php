<?php 

namespace source\Models\Library;

use DateTime;

class Member {
    public function __construct(
        private ?int $id = null, 
        private ?string $name = null,
        private ?string $email = null, 
        private ?DateTime $registrationDate = null
    )
    { // Se você colocar visibilidade (private, public, etc.) no argumento do construtor, o PHP entende: "Ok, vou criar essa variável na classe e salvar o que vier no argumento nela".
    }
    
    public function getId(): ?int 
    {
        return $this->id; 
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function getRegistration(): ?DateTime
    {
        return $this->registrationDate;
    }
    
    public function setId(?int $id): void 
    {
        $this->id = $id;
    }
    public function setName(?string $name): void 
    {
        $this->name = $name;
    }
    public function setEmail(?string $email): void 
    {
        $this->email = $email;
    }
    public function setRegistrationDate(?DateTime $registrationDate): void
    {
        $this->registrationDate =$registrationDate;
    }

    public function show(): string 
    {
        return 
        "
        Membro: #{$this->id} - Nome:{$this->name}<br>
        Email: {$this->email} <br> 
        Data de Registro: {$this->registrationDate} <br> 
        "
        ;
    }
}