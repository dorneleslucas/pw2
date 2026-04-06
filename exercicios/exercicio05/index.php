<?php 

require __DIR__. "/../../source/autoload.php"; 


use source\Models\Hospital\Patient;
use source\Models\Hospital\Doctor;


$paciente1 = new Patient(
    id: 1, 
    name:"lucas",
    email: "lucas@gmail.com",
    password: "12345",
    birthDate: "23/10/2008" ,
    medicalRecord: "o usario nao tem nenhum caso"
);

echo "<p>".$paciente1->show(). "</p>"; 


$doutor1 = new Doctor(
    id: 1, 
    name:"lucas",
    email: "lucas@gmail.com",
    password: "12345",
    crm: "68236726 " ,
    specialty: "o usario nao tem nenhum caso"
); 

echo "<p>" .$doutor1->show(). "</p>";

$paciente1 -> setId(2);
$paciente1 -> setMedialRecord("o usuario morreu ");

$doutor-> setId(3); 
$doutor-> setCrm("324543"); 


