<?php 

namespace source\Models\Vehicles; 

class Car extends Vehicle {
    private $doors; 
    private $fuelType; 

    public function __construct(?string $chassisCode = null, ?string $brand = null, ?string $model = null, ?int $year = null, ?float $basePrice = null, ?Owner $owner = null, ?int $doors = null, ?string $fuelType = null)
    {
        parent::__construct($chassisCode, $brand, $model, $year, $basePrice, $owner);
        $this->doors = $doors; 
        $this->fuelType = $fuelType; 
    }

    public function getDoors(): ?int 
    {
        return $this->doors; 
    }

    public function getFuelType(): ?string
    {
        return $this->fuelType; 
    }

    public function calculteTax(): ?float
    {
        return parent::calculteTax() * 15;
    }

    public function show(): string
{
    // Não passamos nada para parent::show(). 
    // Se quiser o texto do pai + o do carro, concatenamos:
    return "<strong>TIPO: CARRO</strong><br>" . 
           parent::show() . 
           "Portas: {$this->doors}<br>
            Combustível: {$this->fuelType}<br>
            Imposto (15%): R$ " . $this->calculteTax() . "<br>";
}
}