<?php 

require __DIR__ . "/../../source/autoload.php";

use source\Models\Math\PythagoreanTheorem;
use source\Models\Math\Bhaskara;


$pythagorean1 = new PythagoreanTheorem(1, 2); 

$pythagorean2 = new PythagoreanTheorem(3, 4); 

$pythagorean1->calculate(); 
$pythagorean2->calculate(); 


echo $pythagorean1->show() ."<br><br>";
echo $pythagorean2->show() . "<br><br>";


$bhaskara1 =  new Bhaskara(1,5,6); 
$bhaskara2 =  new Bhaskara(2,3,5); 

$bhaskara1->calculate();
$bhaskara2->calculate(); 

echo $bhaskara1->show() . "<br><br>"; 
echo $bhaskara2->show() . "<br><br>"; 


