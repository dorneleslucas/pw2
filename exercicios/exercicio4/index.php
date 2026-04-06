<?php 
require __DIR__ . "/../../source/autoload.php"; 

use Source\Models\Faq\Question;
use Source\Models\Faq\Type;


$type1 = new Type(1, "Inscricoes"); 
$type2 = new Type(2, "Sobre o evento");

$type1-> setId(4);
$type2-> setName("Organização"); 

$question1 = new Question(2, 2, "Como se increver" , "clicando em cima");

$question2 = new Question(3, 2, "Como ver feedback" , "clicando em baixo");


$question1-> setType(1); 
$question2-> setType(2); 

echo $question1-> show(); 
echo $type1-> show(); 
