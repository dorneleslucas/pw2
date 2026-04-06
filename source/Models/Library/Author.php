<?php 

namespace Source\Models\Library; 

class Author {
    private ?int $id; 
    private ?string $name; 
    private ?string $nationality; 
    private ?int $birthYear; 

    public function __construct(?int $id = null, ?string $name = null, ?string $nationality = null, ?int $birthYear = null)
    {
        $this->id = $id; 
        $this->name = $name; 
        $this->nationality = $nationality; 
        $this->birthYear = $birthYear; 
    }

    public function getId(): int 
    {
        return $this->id;
    }
    public function getName(): string 
    {
        return $this->name;
    }
    public function getNationality(): string
    {
        return $this->nationality;
    }
    public function getBirthYear(): int 
    {
        return $this->birthYear;
    }

    public function setId(?int $id): void 
    {
        $this->id = $id;
    }
    public function setName(?string $name): void 
    {
        $this->name = $name;
    }
    public function setNationality(?string $nationality): void 
    {
        $this->nationality = $nationality;
    }
    public function setBirthYear(?int $birthYear): void 
    {
        $this->birthYear = $birthYear;
    }

    public function show(): string
    {
        return
        "
        Author: {$this->name} <br> 
        Nacionality: {$this->nationality} <br> 
        Year Birthday: {$this->birthYear} <br> 
        ";
    }

}