<?php
namespace Source\Models\Classes;

class Product { 
    private $id; 
    private $name; 
    private $price; 

    public function __construct(?int $id = null, ?string $name  = null, ?float $price  = null) 
    {
        $this-> id = $id; 
        $this-> name = $name; 
        $this-> price = $price; 
    }

    public function getId (): ?int  
    {
        return $this-> id; 
    }
    public function getName (): ?string 
    {
        return $this-> name; 
    }

    public function getPrice (): ?float 
    {
        return $this-> price; 
    }

    // setters 

    public function setId (int $id): void 
    {
        $this-> id = $id; 
    }
    public function setName (string $name ): void 
    {
        $this-> name = $name; 
    }
    public function setPrice (float $price): void 
    {
        $this-> price = $price; 
    }

    public function discount(int $discount): ?int 
    {
        return ($this->getPrice() * $discount) / 100; 
    }

    public function show() 
    {
        echo "O produto $this->name , valor $this->price e o id $this->id"; 
    }
}