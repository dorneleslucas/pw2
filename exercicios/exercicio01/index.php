<?php 


require __DIR__ . "/../../source/autoload.php";

use source\Models\Classes\Product; 

$product = new Product();
var_dump($product); 

$product = new Product(1, "Lucas",1000); 
$product->show(); 


echo "<p> no id {$product->getId()}, sendo o produto {$product->getName()} , tendo o valor de {$product->getPrice()} </p> ";

$product->setId(3);
$product->setName("Bola");
$product->setPrice(20000); 

echo"<p> O id {$product->getId()} , tendo o nome {$product->getName()}, sendo o preco {$product->getPrice()}";


