<?php
namespace source\Models\Library;
use Source\Models\Library\Book;

class Ebook extends Book {
    public function __construct(
        ?string $isbn = null,
        ?string $title = null,
        ?Author $author = null, ?int $publicationYear = null,
        ?int $pages = null, 
        private ?float $fileSizeMB = null, 
        private ?string $format = null
    )
    {
        return parent::__construct($isbn, $title, $author, $publicationYear, $pages);
    }

    public function getFileSizeMB(): ?float
    {
        return $this->fileSizeMB;
    }
    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFileSizeMB(?float $fileSizeMB): void 
    {
        $this->fileSizeMB = $fileSizeMB;
    }
    public function setFormat(?string $format): void 
    {
        $this->format = $format;
    }

    public function calculateLateFee(?int $days): float
    {
        return parent::calculateLateFee($days) * 0.50;
    }
    public function show(): string
    {
        return parent::show()
        . 
        "
         Tamanho: {$this->fileSizeMB} MB
         Formato: {$this->format}
        "
        ;
    }

}