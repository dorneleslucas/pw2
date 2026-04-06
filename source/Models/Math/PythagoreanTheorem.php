<?php 

namespace Source\Models\Math; 

class PythagoreanTheorem {
    private  $cathetusA;
    private  $cathetusB; 
    private ?float $hypotenuse; 
    


    public function __construct(?float $cathetusA = null, ?float $cathetusB = null )
    {
        $this->cathetusA = $cathetusA; 
        $this->cathetusB = $cathetusB; 
    }

    public function getCathetusA(): ?float
    {
        return $this->cathetusA;
    }
    public function getCathetusB(): ?float 
    {
        return $this->cathetusB;
    }
    public function getHypotenuse(): ?float 
    {
        return $this->hypotenuse;
    }


    public function setCathetusA(?float $cathetusA): void 
    {
        $this->cathetusA = $cathetusA;
    }
    public function setCathetusB(?float $cathetusB): void 
    {
        $this->cathetusB = $cathetusB;
    }
    public function setHypotenuse(?float $hypotenuse): void 
    {
        $this->hypotenuse = $hypotenuse; 
    }
    
    public function calculate(): ?float 
    {
        return $this->hypotenuse = sqrt($this->cathetusA ** 2 + $this->cathetusB ** 2);
    }

    public function show(): ?string 
    {
        return 
         "
         Teorema de Pitágoras
         (Pythagorean Theorem)
         Cateto a (Cathetus a): {$this->cathetusA}
         Cateto b (Cathetus b): {$this->cathetusB}
         Hipotenusa (Hypotenuse): {$this->hypotenuse}
   "; 
    }
}