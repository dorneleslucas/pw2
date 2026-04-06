<?php 

require __DIR__ . "/../../source/autoload.php"; 

use Source\Models\Course\Instructor; 
use Source\Models\Course\Course; 

$instructor1 = new Instructor(1, "Kat", "kat@gmail.com", "aojjdoajd", "Nutricionista", "muito legal"); 
$instructor2 = new Instructor(2, "lucas", "lucas@gmail.com", "udhsudh", "Cientista ", "Muito incrivel");

$instructor1->setPassword("isdnidsn"); 
$nameInstructor1 = $instructor1->getBio(); 

$instructor2->setBio("Muito engraçado"); 
$nameInstructor2 = $instructor2->getName(); 


$course1 = new Course(1, "Educacao Fisica", 80, $instructor1 ); 
$course2 = new Course(2, "Banco de dados", 80, $instructor2);


echo $course1->show();
echo $course2->show();

