<?php 

namespace Source\Models\Course;  

class Course {
    private $id; 
    private $title; 
    private $hours; 
    private ?Instructor $instructor; 

    public function __construct(?int $id = null, ?string $title = null, ?int $hours = null, ?Instructor $instructor = null)
    {
        $this->id = $id; 
        $this->title = $title; 
        $this->hours = $hours; 
        $this->instructor = $instructor; 
    }

    public function getId(): ?int 
    {
        return $this->id; 
    }
    public function getTitle(): ?string 
    {
        return $this->title;
    }
    public function getHours(): ?int 
    {
        return $this->hours;
    }
    public function getInstructor(): ?Instructor
    {
        return $this->instructor;
    }

    public function setId(?int $id): void 
    {
        $this->id = $id;
    }
    public function setTitle(?string $title): void 
    {
        $this->title = $title;
    }
    public function setHours(?int $hours): void 
    {
        $this->hours = $hours;
    }
    public function setInstructor(?Instructor $instructor): void
    {
        $this->instructor = $instructor;
    }

    public function show(): ?string
    {
        return 
        "
        Curso: #{$this->id} - Título {$this->title} -
        Carga Horária: {$this->hours}
        Instrutor: {$this->instructor->getName()}
        ";
    }
}