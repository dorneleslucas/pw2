<?php 

namespace Source\Models\Course;  

class Instructor extends User {
    private $degree; 
    private $bio; 

    public function __construct(?int $id, ?string $name, ?string $email, ?string  $password, ?string $degree = null, ?string $bio = null) {
        parent::__construct($id, $name, $email,$password);
        $this->degree = $degree; 
        $this->bio = $bio; 
    }

    public function getDegree(): ?string 
    {
        return $this->degree;
    }
    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setDegree(?string $degree): void
    {
        $this->degree = $degree;
    }
    public function setBio(?string $bio): void 
    {
        $this->bio = $bio; 
    }

    public function show(): ?string
    {
        return 
        "
        Instrutor: #{$this-> getId()}<br> 
        Email: {$this-> getEmail()}<br> 
        Formação: {$this-> degree}<br> 
        Bio: {$this-> bio}<br> 
        "; 

    }
}