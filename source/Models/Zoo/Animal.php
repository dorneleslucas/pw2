<?php 

namespace source\Models\Zoo; 

class Animal {
   private $id;
   private $name; 
   private $species; 
   private $habitat; 
   private $weight; 
   private $age; 
   
   public function __construct(?int $id = null, ?string $name = null, ?string $species = null, ?string $habitat = null, ?float $weight = null, ?int $age = null) 
   {
    $this->id = $id; 
    $this->name = $name; 
    $this->species = $species; 
    $this->habitat = $habitat; 
    $this->weight = $weight; 
    $this->age = $age; 
   }


   public function getId(): int 
   {
    return $this->id;
   }
   public function getName(): string 
   {
    return $this->name; 
   }
   public function getSpecies(): string 
   {
    return $this->species;
   }
   public function getHabitat(): string
   {
    return $this->habitat;
   }
   public function getWeight(): float 
   {
    return $this->weight;
   }
   public function getAge(): int 
   {
    return $this->age;
   }

   public function setId(int $id): void 
   {
    $this->id = $id; 
   }
   public function setName(string $name): void 
   {
    $this->name = $name; 
   }
   public function setSpecies(string $species): void 
   {
    $this->species = $species;
   }
   public function setHabitat(string $habitat): void 
   {
    $this->habitat = $habitat;
   }
   public function setWeight(float $weight): void 
   {
    $this->weight = $weight;
   }
   public function setAge(int $age): void 
   {
    $this->age = $age; 
   }

   public function eat(): string 
   {
    return "{$this->name} esta se alimentando";  
   }
   public function sleep(): string 
   {
    return "{$this->name} esta dormindo";
   }
   
   public function show(): string 
   {
    return "   Animal: #{$this->id} - {$this->name}
   Espécie (Species): {$this->species}
   Habitat: {$this->habitat}
   Peso (Weight): {$this->weight} kg
   Idade (Age): {$this->age}
    
    ";
   }
}