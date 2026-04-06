<?php 

namespace source\Models\Company;


class Employee extends User{
    private $hoursWorked; 
    private $hourValue; 
    protected $type = 'Funcionário'; 
    public function __construct(?int $id = null, ?string $name = null, ?string $email = null, ?string $password = null, ?float $hoursWorked = null, ?float $hourValue = null) {
        parent::__construct ($id,$name,$email,$password); 
        $this->hoursWorked = $hoursWorked; 
        $this->hourValue = $hourValue; 
        
    }

    public function getHoursWorked(): ?float
    { 
        return $this->hoursWorked; 
    }
    public function getHourValue(): ?float 
    {
        return $this->hourValue; 
    }

    public function setHoursWorked(?float $hoursWorked): void 
    {
         $this->hoursWorked = $hoursWorked;
    }
    public function setHourValue(?float $hourValue): void 
    {
         $this->hourValue = $hourValue; 
    }

    public function calculateSalary(): ?float
    {
        return $this->hoursWorked * $this->hourValue; 
    }

    public function show(): string 
    {
        return 
        " 
        {$this->type}: #{$this->getId()} - Nome: {$this->getName()} <br>
        Email: {$this->getEmail()}<br>
        Horas Trabalhadas: {$this->hoursWorked}<br>
        Valor da Hora: R$ {$this->hourValue}<br>
        Salário: {$this->calculateSalary()}<br>
        "; 
    }
}