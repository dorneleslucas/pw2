<?php

use Source\Models\Library\Book;
use source\Models\Library\Member;

class Loan {
    private $renovou = false; 
    public function __construct(
        private ?int $id = null, 
        private ?Member $member = null, 
        private ?Book $book = null, 
        private ?DateTime $loanDate = null, 
        private ?DateTime $dueDate = null,
        private ?DateTime $returnDate = null
        // mesma coisa que private DateTime|null $returnDate = null
    )
    {
    }

    

}
