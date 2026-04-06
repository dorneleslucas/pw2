<?php 

namespace source\Models\Vehicles; 

class Vehicle {
    private $chassisCode; 
    private $brand; 
    private $model; 
    private $year; 
    private $basePrice;
    private Owner $owner; 


    public function __construct(?string $chassisCode = null, ?string $brand = null, ?string $model = null, ?int $year = null, ?float $basePrice = null, Owner $owner =null)
    {
        $this->chassisCode = $chassisCode; 
        $this->brand = $brand; 
        $this->model = $model; 
        $this->year = $year; 
        $this->basePrice = $basePrice; 
        $this->owner = $owner; 
    }

    public function getChassiscode(): ?string 
    {
        return $this->chassisCode;
    }
    public function getBrand(): ?string 
    {
        return $this->brand; 
    }
    public function getModel(): ?string
    {
        return $this->model;
    }
    public function getYear(): ?int 
    {
        return $this->year;
    }
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }
    public function getOwner(): Owner
    {
        return $this->owner; 
    }

    public function setChassiscode(?string $chassisCode): void 
    {
        $this->chassisCode = $chassisCode; 
    }
    public function setBrand(?string $brand): void 
    {
        $this->brand = $brand;
    }
    public function setModel(?string $model): void 
    {
        $this->model = $model;
    }
    public function setYear(?int $year): void 
    {
        $this->year = $year;
    }
    public function setBaseprice(?float $basePrice): void 
    {
        $this->basePrice = $basePrice;
    }
    public function setOwner(Owner $owner): void 
    {
        $this->owner= $owner; 
    }

    public function calculteTax(): ?float
    {
        return $this->basePrice * 0.01;  
    } 

    public function show(): string 
{
    // Verificamos se existe um owner para evitar erro em null
    $ownerName = $this->owner ? $this->owner->getName() : "Não informado";
    
    return "
    Veículo: {$this->brand} - {$this->model} ({$this->year}) <br> 
    Código de Chassi: {$this->chassisCode} <br>
    Valor Base: R$ {$this->basePrice} <br>
    Proprietário: {$ownerName}<br>
    ";
}
    }