<?php

namespace Source\Models\Faq;  

class Question {
    private $id; 
    private $question; 
    private $answer; 
    private $type; 

    public function __construct(?int $id = null, ?string $question = null, ?string $answer = null, ?int $type = null) 
    {
        $this-> id = $id; 
        $this-> question = $question; 
        $this-> answer = $answer; 
        $this-> type = $type; 
    }

    public function getId(): ?int 
    {
        return $this-> id;    
    } 

    public function getQuestion(): ?string
    {
        return $this-> question;
    }
    
    public function getAnswer(): ?string 
    {
        return $this-> answer;
    }

    public function getType(): ?string
    {
        return $this-> type;
    }


    public function setId(?int $id): void 
    {
        $this-> id = $id;
    }

    public function setQuestion(?string $question): void 
    {
        $this-> question = $question;
    }

    public function setAnswer(?string $answer): void 
    {
        $this-> answer = $answer; 
    }
    
    public function setType(?int $type): void 
    {
        $this-> type = $type;
    }

    public function show(): ?string 
    {    
        return " 
        FAQ #{$this-> id} <br>
        Categoria: {$this-> type} <br>
        Pergunta: {$this-> question }<br>
        Resposta: {$this-> answer}<br>
        ";
    }
}