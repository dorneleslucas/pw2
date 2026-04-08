<?php

namespace source\Models\Zoo; 
use source\Models\Zoo; 


class Mamal extends Animal {
    private $furColor; 
    private $gestationPeriod; 

    public function __construct(?int $id = null, ?string $name = null, ?string $species = null, ?string $habitat = null, ?float $weight = null, ?int $age = null, ?string $furColor = null, ?int $gestationPeriod = null)
    {
        parent::__construct($id, $name,$species,$habitat, $weight, $age); 
        $this->furColor = $furColor; 
        $this->gestationPeriod = $gestationPeriod; 
    }

    public function getFurcolor(): string 
    {
        return $this->furColor;
    }
    public function getGestationPeriod(): int  
    {
        return $this->gestationPeriod;
    }

    public function setFurcolor(?string $furColor): void 
    {
        $this->furColor = $furColor;
    }

    public function setGestationPeriod(?int $gestationPeriod): void 
    {
        $this->gestationPeriod = $gestationPeriod;
    }

    public function breastFeed(): string 
    {
        return "{$this->getName()} está se amamentando"; 
    }
    
    public function show(): string
    {
        return parent:: show() . 
        "
        Cor do Pelo (Fur Color): {$this->furColor}
        Período de Gestação (Gestation Period): {$this->gestationPeriod} dias"
        ; 
    }

    
}