<?php 

class CreditCard{
    public $number;
    public $expirationDate;
    public $code;

    public function __construct($number, $expirationDate, $code){
    if (strlen($number) !== 16 ){
        throw new Exception("Numero carta di credito non valido. Le cifre devono essere 16.");
    } else{
        $this->number = $number;
    }
    if ($expirationDate > date('Y')){
        $this->expirationDate = $expirationDate;
    } else {
        throw new Exception("Carta di credito scaduta");
    } 
    if (strlen($code) === 3){
        $this->code = $code;
    } else {
        echo 'Inserisci un codice di sicurezza valido';
    } 
    }

}


?>