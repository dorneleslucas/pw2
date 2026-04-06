<?php 

namespace source\Models\Company;

class Seller extends Employee{
    private $totalSales; 
    public function __construct(?int $id = null, ?string $name = null, ?string $email = null, ?string $password = null, ?float $hoursWorked = null, ?float $hourValue = null, ?float $totalSales =  null)
    {
        parent::__construct($id, $name, $email, $password, $hoursWorked, $hourValue);
        $this->totalSales = $totalSales; 
        $this->type = 'Vendedor';
    }

    public function getTotalSales(): ?float 
    {
        return $this->totalSales;
    }
    public function setTotalSales(?float $totalSales): void 
    {
        $this->totalSales = $totalSales; 
    }

    public function calculateComission(): ?float 
    {
       return (10/100) * $this->totalSales; 
    }


    public function calculateSalary(): ?float
    {
        return parent::calculateSalary() + $this->calculateComission(); 
    }

    public function show(): string
    {
        return parent::show() . "
        Comissão (10%): {$this->calculateComission()} <br>
        Salário Total: R$ {$this->calculateSalary()} <br>"; 
    }
}