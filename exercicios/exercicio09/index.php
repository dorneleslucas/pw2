<?php 

require __DIR__ . "/../../source/autoload.php"; 

use source\Models\Vehicles\Owner; 
use source\Models\Vehicles\Car; 
use source\Models\Vehicles\Motorcylce; 

$owner1 = new Owner(1,'lucas','82772192001', '51999562121');
$owner2 =  new Owner(2,'kat', '72812882192', '51982127371'); 

echo $owner1->show(); 
echo $owner2->show();

$car1 = new Car('Bdahgbd', 'volksvagen','dd4',2008, 50000.00, $owner1, 4, 'gasolina'); 

$car1->calculteTax();
echo $car1->show();

$car2 = new Car('JDDADJAKD', 'xm8', 'i2dn2', 2009, 58999.00, $owner2,null,'gasolina'); 

echo '<br>'; 
$car2->calculteTax(); 
echo $car2->show();

$motorcycle1 = new Motorcylce(); 
echo $motorcycle1->show(null);