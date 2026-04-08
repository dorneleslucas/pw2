<?php

use source\Models\Zoo\Animal;

class Bird extends Animal {
    private $wingspan; 
    private bool $canFly; 

    public function __construct(?int $id = null, ?string $name = null, ?string $species = null, ?string $habitat = null, ?float $weight = null, ?int $age = null)
    {
        return parent::__construct($id, $name, $species, $habitat, $weight,$age ); 
        $this->$wingspan = $wingspan; 
        $this->$canFly = $canFly; 
    }

    public function getWingsPan(): int 
    {
        return $this->wingspan;
    }
    public function getCanfly(): bool 
    {
        return $this->canFly;
    }
    public function setWingsPan(float $wingspan): void 
    {
        $this->wingspan = $wingspan;
    }
    public function setCanfly(bool $canFly): void 
    {
        $this->canFly = $canFly;
    }

    public function sing(): string 
    {
        return "
        {$this->getName()} esta cantando
        ";
    }

    public function fly(): string
    {
        if($this->canFly === false){
        return "{$this->getName()} não consegue voar.";
        } else {
        return " {$this->getName()} esta voando!";
        }
        
    }

    public function show(): string
    {
        return parent::show() . 
        "
        Envergadura (Wingspan): " . number_format($this->wingspan,2,',', '.' ) . 
        "Voa (Can Fly): {$this->fly()}\n" 
        ;
    }

    
}