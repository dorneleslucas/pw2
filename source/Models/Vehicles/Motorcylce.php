<?php 

namespace source\Models\Vehicles; 

class Motorcylce extends Vehicle {
    private $displacement; 

    public function __construct(?string $chassisCode = null, ?string $brand = null, ?string $model = null, ?int $year = null, ?float $basePrice = null, ?Owner $owner = null , ?int $displacement = null)
    {
        parent::__construct($chassisCode, $brand, $model, $year, $basePrice, $owner);
        $this->displacement = $displacement;
    }

    public function getDisplacement(): ?int 
    {
        return $this->displacement;
    }

    public function setDisplacement(?int $displacement): void 
    {
        $this->displacement = $displacement; 
    } 

    public function calculteTax(): ?float
    {
        return parent::calculteTax() * 5;
    }

   public function show(): string
{
    // Pegamos o texto básico do Veículo e adicionamos o que é específico da Moto
    return parent::show() . 
           "Cilindradas: {$this->displacement}cc <br>" .
           "Imposto (5%): R$ " . number_format($this->calculteTax(), 2, ',', '.') . "<br>";
}
}