<?php 

namespace Source\Models\Classes; 

class Order { 
    private $id; 
    private $costumerName; 
    private $total; 

    public function __construct(?int $id = null, ?string $costumerName = null, ?float $total = null)
    {
        $this->id = $id;
        $this->costumerName = $costumerName;
        $this->total = $total;
    }

    // getters 

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getcostumerName(): ?string
    {
        return $this->costumerName;
    }
    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setId (int $id): void 
    {
        $this->id = $id; 
    }
    public function setCostumerName(string $costumerName): void
    {
        $this->costumerName = $costumerName;
    }
    public function setTotal (float $total): void
    {
        $this->total = $total; 
    } 

    public function addFree(int $porcent): ?int
    {
        if ($this->total === null) {
            return null;
        }

        $totalporcent = ($porcent / 100) * $this->total;
        return (int)($this->total + $totalporcent);
    }

    public function show(): void 
    {
        echo "Pedido: $this->id - Cliente: $this->costumerName - Total: $this->total ";
    }


}