<?php  

namespace source\Models\Payment;

use Source\Models\Payment\Payment;

class CreditCardPayment extends Payment {
    private $cardLastDigits; 
    private $installments; 
    private $feeRate; 

    
}