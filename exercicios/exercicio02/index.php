<?php 

require __DIR__. "/../../source/autoload.php"; 

use source\Models\Classes\Order; 

$Order = new Order(); 
var_dump($Order); 

$Order = new Order(1, "Carlos", 1000); 

$Order-> show(); 






