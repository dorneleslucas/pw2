<?php 

require __DIR__ . "/../../source/autoload.php"; 

use source\Models\Company\Employee;
use source\Models\Company\Seller;
use source\Models\Company\Manager;

$employee1 = new Employee(1,'lucas','lucas@gmail.com', 'lucaslegal', 120.25, 10 ); 
$employee2 = new Employee(2,'kat', 'kat@gmail.com', 'katlegal', 115.50, 10); 

$employee1->calculateSalary(); 
echo $employee1->show() . '<br>';

$employee2->calculateSalary(); 
echo $employee2->show() . '<br>';

$seller1 = new Seller(1, 'robson', 'robson@gmail.com', 'robsolegal', 200.00, 20, 1000.00); 
$seller2 = new Seller(2, 'antonia', 'antonia@gmail.com', 'antonialehgal', 200.00, 10, 1020.00);

$seller1->calculateComission(); 
$seller1->calculateSalary(); 
echo $seller1->show() . '<br>';

$seller2->calculateComission(); 
$seller2->calculateSalary(); 
echo $seller2->show(). '<br>';

$manager = new Manager(1, 'douglas', 'douglas@gmail.com', 'douglaslegal', 220.00, 50, 1000.00); 

$manager->calculateSalary(); 
echo $manager->show() . '<br>';
