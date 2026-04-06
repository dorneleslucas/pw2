<?php 

namespace source\Models\Library;

use Source\Models\Library\Book;

class Audiobook extends Book{
    private ?int $hour = 0;
    public function __construct(
        ?string $isbn = null,
        ?string $title = null,
        ?Author $author = null,
        ?int $publicationYear = null,
        ?int $pages = null,
        private ?int $durationMinutes = null
        )
    {
        parent::__construct($isbn, $title, $author, $publicationYear, $pages);
        $this->calculetHour();
    }

    public function getHour(): ?int 
    {
        return $this->hour;
    }
    public function getDurationMinutes(): ?int 
    {
        return $this->durationMinutes; 
    }
    public function setDurationMinutes(?int $durationMinutes): void 
    {
        $this->durationMinutes = $durationMinutes;
        $this->calculetHour();
        // o calculetHour() dentro do setDurationMinutes para manter o objeto sincronizado. Se você não fizer isso, o seu objeto terá informações mentirosas.
    }

    public function calculetHour(): void 
    {
        if($this->durationMinutes) {
            // (int) garante que 2.5 horas vire apenas 2 horas
          $this->hour =(int)($this->durationMinutes / 60); 
        };  
    }
    public function calculateLateFee(?int $days): float
    {
      return parent::calculateLateFee($days) * 1;
    }

    public function show(): string
    {
        $minutosrestantes = $this->durationMinutes % 60;
        return parent::show()
        .
        "
        Duração:  {$this->durationMinutes} ({$this->hour} horas) - Minutos restantes {$minutosrestantes} <br> 
        "
        ;
    }
}