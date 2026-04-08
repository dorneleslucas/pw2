<?php 

namespace Source\Models\Payment;

class Payment {
    private $id; 
    private $amount; 
    private $status;
    private $description; 
    private $createdAt; 

    public function __construct(?int $id = null, ?float $amount = null, ?string $status = null, ?string $description = null, ?string $createdAt = null)
    {
        $this->id = $id; 
        $this->amount = $amount; 
        $this->status = $status; 
        $this->description = $description; 
        $this->createdAt = date($createdAt,'Y-m-d H:i:s'); 
    }

    public function getId(): int{
        return $this->id;
    }
    public function getAmount(): float 
    {
        return $this->amount;
    }
    public function getStatus(): string 
    {
        return $this->status;
    }
    public function getDescription(): string 
    {
        return $this->description;
    }
    public function getCreateAdt(): string 
    {
        return $this->createdAt;
    }
    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function setAmount(float $amount): void 
    {
        $this->amount = $amount;
    }
    public function setStatus(string $status): void 
    {
        $this->status = $status;
    }
    public function setDescription(string $description): void 
    {
        $this->description = $description;
    }
    public function setCrateAdt(string $createdAt): void 
    {
        $this->createdAt= $createdAt;
    }

    public function calculateFee(): float 
    {
        return 0.0; 
    }
    public function process(): string
    {
        $this->status = "Aprovado"; 

        return "Pagamento #{$this->id} processado com sucesso."; 
    }

    public function show(): string 
    {
        return 
        "
        Pagamento: #{$this->id}
        Descrição: {$this->description}
        Valor: R$ {$this->amount}
        Taxa: R$ {$this->calculateFee()}
        Valor Total: R$ {$this->amount}
        Status: {$this->status}
        ";
    }
}
