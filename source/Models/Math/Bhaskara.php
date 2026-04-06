<?php 

namespace Source\Models\Math; 

class Bhaskara {
    private $a; 
    private $b; 
    private $c; 
    private $discriminant; 
    private $root1; 
    private $root2; 

    public function __construct(?float $a = null, ?float $b = null, ?float $c = null )
    {
        $this->a = $a; 
        $this->b = $b; 
        $this->c = $c; 
    }

    public function getA(): ?float{ return $this->a; }
    public function getB(): ?float{ return $this->b; }
    public function getC(): ?float{ return $this->c; }

    public function setA(?float $a): void {$this->a = $a; }
    public function setB(?float $b): void {$this->b = $b; }
    public function setC(?float $c): void {$this->c = $c; }

    public function calculate(): void
    {
        $this->discriminant =  ($this-> b**2) - (4 * $this->a * $this->c); 
        if(  $this->discriminant < 0 ) {
           
            $this->root1 = null; 
            $this->root2 = null; 

        } else if ($this->discriminant === 0.0) {
           
            $this->root1 = - ($this->b) / (2 * $this->a);
            $this->root2 = $this->root1;

        } else { 
            
            $this-> root1 = (-($this->b) + sqrt($this->discriminant)) / (2* $this->a);
            $this-> root2 = (-($this->b) - sqrt($this->discriminant)) / (2* $this->a);

        }
        
    }

    public function show(): ?string 
    {

        if( $this->discriminant < 0 || $this->discriminant === null ) {
        return  "A equação não possui raízes reais";  
        }
        
        return 
        
        "
        Fórmula de Báskara (Bhaskara's Formula)
        Coeficiente a (Coefficient a): {$this->a}
        Coeficiente b (Coefficient b): {$this->b}
        Coeficiente c (Coefficient c): {$this->c}
        Discriminante (Discriminant) Δ: {$this->discriminant}
        Raiz 1 (Root 1) x₁: {$this->root1}
        Raiz 2 (Root 2) x₂: {$this->root2}
        "; 

    }
}