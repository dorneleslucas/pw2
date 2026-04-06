<?php 

namespace source\Models\Company;

class Manager extends Employee {
    private $bonus;

    public function __construct(?int $id = null, ?string $name = null, ?string $email = null, ?string $password = null, ?float $hoursWorked = null, ?float $hourValue = null, ?float $bonus = null)
    {
        parent::__construct($id, $name, $email, $password, $hoursWorked, $hourValue);
        $this->bonus = $bonus; 
        $this->type = 'Chefe';
    }

    public function getBonus(): ?float 
    {
        return $this->bonus; 
    }

    public function setBonus(?float $bonus): void 
    {
        $this->bonus = $bonus; 
    }

    public function calculateSalary(): ?float
    {
        return parent::calculateSalary() + $this->bonus; 
    }

    public function show(): string
    {
        return parent::show() . "
        Bônus Fixo: R$ {$this->bonus}<br>
        Salário Total: {$this->calculateSalary()}<br>
        "; 
    }
}