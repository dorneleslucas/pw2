<?php 

namespace source\Models\Hospital;

class Patient extends User { 
    private $birthDate; 
    private $medicalRecord; 

    public function __construct(?int $id, string $name, string $email, string $password, string $birthDate = null , string $medicalRecord = null) {
        parent::__construct ($id,$name,$email,$password); 
        $this->birthDate = $birthDate; 
        $this->medicalRecord = $medicalRecord;
    }

    public function getBirthDate(): string   
    {
        return $this->birthDate = $birthDate; 
    }

    public function getMedicalRecord(): string 
    {
        return $this->getmedicalRecord = $medicalRecord; 
    }

    
    public function setBirthDate (string $birthDate): void 
    { 
        $this-> birthDate = $birthDate;
    } 

    public function setMedialRecord (string $medicalRecord): void 
    { 
        $this-> medicalRecord = $medicalRecord; 
    }


    public function show(): string { 
        return "o id {$this->id} , o nome {$this-> name} ,o email {$this-> email}, data de nascimento {$this->birthDate} , prontuario {$this-> medicalRecord}";
    }
}