<?php
namespace source\Models\Library;
use Source\Models\Library\Book;

class PhysicalBook extends Book {
    public function __construct(
    ?string $isbn = null,
    ?string $title = null,
    ?Author $author = null,
    ?int $publicationYear = null,
    ?int $pages = null,
    private ?int $copiesInStock = null,
    private ?string $shelfLocation = null
    )
    {
        return parent::__construct($isbn, $title, $author, $publicationYear, $pages);
    }

    public function getCopiesInStock(): ?int 
    {
        return $this->copiesInStock;
    }
    public function getShelfLocation(): ?string 
    {
        return $this->shelfLocation;
    }

    public function setCopiesInStock(?int $copiesInStock): void 
    {
        $this->copiesInStock = $copiesInStock;
    }
    public function setShelfLocation(?string $shelfLocation): void 
    {
        $this->shelfLocation = $shelfLocation;
    }

    public function calculateLateFee(?int $days): float
    {
      return parent::calculateLateFee($days) * 2;
    }

    public function show(): string
    {
        return parent::show()
        . 
        " Exemplares em Estoque: {$this->copiesInStock}<br> 
          Localização: {$this->shelfLocation}<br> 
        "
        ; 
    }
}