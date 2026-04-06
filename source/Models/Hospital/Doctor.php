<?php 

namespace source\Models\Hospital;

class Doctor extends User {
    private $crm; 
    private $specialty; 

    public function __construct(?int $id, ?string $name, ?string $email, ?string $password, ?string $crm = null, ?string $specialty = null) {
        parent::__construct ($id,$name,$email,$password); 
        $this->crm = $crm;
        $this->specialty = $specialty;
    }

    public function getCrm(): ?string 
    {
        return $this->crm; 
    }

    public function getSpecialty(): ?string 
    {
        return $this-> specialty; 
    }

    public function setCrm (?string $crm): void 
    { 
        $this-> crm = $crm;
    } 

    public function setSpecialty (?string $specialty): void 
    { 
        $this-> specialty = $specialty; 
    }

    public function show(): string 
    {
        return "o id {$this->getId()} , o nome {$this-> getName()} ,o email {$this-> getEmail()}, crm {$this->crm} , especialidade {$this-> specialty}";
    }

    
}
