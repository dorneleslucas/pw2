<?php 
namespace Source\Models\Classes; 

class Employee {
    // 1. Atributos privados
    private int $id;
    private string $name;
    private float $salary;

    // Construtor para inicializar os valores
    public function __construct(int $id, string $name, float $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    // Getters e Setters
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function setSalary(float $salary): void {
        // Regra de segurança: não permitir salário negativo
        if ($salary >= 0) {
            $this->salary = $salary;
        }
    }

    // 2. Método para aplicar reajuste percentual
    public function raise(float $percentage): void {
        if ($percentage > 0) {
            $increase = $this->salary * ($percentage / 100);
            $this->salary += $increase;
        }
    }

    // 3. Método para formatar as informações
    public function show(): string {
        // Formatação brasileira de moeda (R$ 1.000,00)
        $formattedSalary = number_format($this->salary, 2, ',', '.');
        return "Funcionário: #{$this->id} - Nome: {$this->name} - Salário: R$ {$formattedSalary}";
    }
}

