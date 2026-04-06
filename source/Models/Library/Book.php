<?php

namespace Source\Models\Library; 

class Book {
    private ?int $days = null;

    public function __construct(
        private ?string $isbn = null, 
        private ?string $title = null, 
        private ?Author $author = null, 
        private ?int $publicationYear = null,
        private ?int $pages = null 
    )
    {
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }
    public function getTitle(): ?string 
    {
        return $this->title;
    }
    public function getAuthor(): ?Author 
    {
        return $this->author;
    }
    public function getPublicationYear(): ?int 
    {
        return $this->publicationYear;
    }
    public function getPages(): ?int 
    {
        return $this->pages;
    }
    public function getDays(): ?int 
    {
        return $this->days;
    }

    public function setIsbn(?string $isbn): void 
    {
        $this->isbn =  $isbn;
    }
    public function setTitle(?string $title): void 
    {
        $this->title = $title; 
    }
    public function setAuthor(?Author $author): void 
    {
        $this->author = $author;
    }
    public function setPublicationYear(?int $publicationYear): void 
    {
        $this->publicationYear = $publicationYear;
    }
    public function setPages(?int $pages): void 
    {
        $this->pages = $pages;
    }

    public function calculateLateFee(?int $days): float
    {
      return $this->days = $days;  
    }
    
    public function show(): string
    {
        // O ?-> tenta chamar o método. Se author for null, ele retorna null sem dar erro.
        // O ?? define o valor padrão caso o resultado seja null.
        $authorName = $this->author ? $this->author->getName() : "Desconhecido";
        // $variavel = (condição) ? (valor se verdade) : (valor se falso);
        
        return "Livro: {$this->title}<br>  
        ISBN: {$this->isbn}<br>
        Autor: {$authorName}<br>
        Ano de Publicação: {$this->publicationYear}<br> 
        Páginas: {$this->pages}<br>                      
        "
        ;
    }
}

// Imagine que a classe Book é uma caixa e a classe Author é outra caixa. Quando você faz $this->author = $author, você está colocando a "caixa Autor" dentro da "caixa Livro".
// 
// Herança (extends): O Livro seria um Autor (o que não faz sentido).
// 
// Composição: O Livro tem um Autor (isso é o que você fez).