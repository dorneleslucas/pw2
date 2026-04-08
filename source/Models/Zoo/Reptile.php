<?php

namespace source\Models\Zoo; 
use source\Models\Zoo;

class Reptile extends Animal{
    private $isVenomous; 
    private $scaleType; 

    public function __construct(?int $id = null, ?string $name = null, ?string $species = null, ?string $habitat = null, ?float $weight = null, ?int $age = null, ?bool $isVenomous = null, ?string $scaleType = null)
    {
        return parent::__construct($id, $name, $species, $habitat, $weight, $age);

        $this->isVenomous =  $isVenomous;
        $this->scaleType = $scaleType; 
    }

    public function getIsVenomous(): bool
    {
        return $this->isVenomous;
    }
    public function getScaleType(): string
    {
        return $this->scaleType;
    }

    public function setIsVenoumous(bool $isVenomous): void 
    {
         $this->isVenomous = $isVenomous;
    }
    public function setScaleType(string $scaleType): void 
    {
        $this->scaleType = $scaleType;
    }

    public function shed(): string 
    {
        return "{$this->getName()} esta trocando de pele(shedding)";
    }

    public function show(): string
    {
        return parent::show() .  
        "
         Venenoso (Venomous): {$this->isVenomous}
         Tipo de Escamas (Scale Type): {$this->scaleType}
        "
        ;
    }

}