<?php 
require __DIR__ . "/../../source/autoload.php"; 

use Source\Models\Classes\Employee;
// 4. Instanciando o objeto
$emp1 = new Employee(101, "Ana Silva", 3500.00);

echo $emp1->show();

// Utilizando setters para atualizar dados
$emp1->setName("Ana Silva Souza");
$emp1->setSalary(3600.00); // Ajuste de base antes do aumento

echo $emp1->show();

// Aplicando reajuste (Ex: 10%)
$emp1->raise(10);

// Exibindo o resultado final
echo $emp1->show();
