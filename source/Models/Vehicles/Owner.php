<?php 

namespace source\Models\Vehicles; 

class Owner {
    private $id; 
    private $name; 
    private $cpf; 
    private $phone; 

    public function __construct(?int $id = null, ?string $name = null, ?string $cpf = null, ?string $phone = null)
    {
        $this->id = $id; 
        $this->name = $name; 
        $this->cpf = $cpf; 
        $this->phone = $phone; 
    }

    public function getId(): ?int 
    {
       return $this->id; 
    }

    public function getName(): ?string 
    {
        return $this->name; 
    }
    public function getCpf(): ?string 
    {
        return $this->cpf;
    }
    public function getPhone(): ?string 
    {
        return $this->phone;
    }

    public function setId(?int $id): void 
    {
        $this->id = $id;
    }
    public function setName(?string $name): void 
    {
        $this->name = $name;
    }
    public function setCpf(?string $cpf): void 
    {
        $this->cpf = $cpf;
    }
    public function setPhone(?string $phone)
    {
        $this->phone =$phone; 
    }

    public function show(): string 
    {
        return

        "
        <b> PROPRIETÁRIO </b> 
        Proprietário: #{$this->id} - Nome: {$this->name} <br>
        CPF: {$this->cpf} <br>
        Telefone: {$this->phone} <br> 
        <br> 
        "
        ;
    }
}