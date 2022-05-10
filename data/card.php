<?php 

class CreditCard{
    protected  $cardNumber;
    protected int $expirationMonth;
    protected int $expirationYear;
    protected int $cvv;

    function __construct($cardNumber, int $expirationMonth, int $expirationYear, int $cvv) {
        $this -> cardNumber         = $cardNumber;
        $this -> expirationMonth    = $expirationMonth;
        $this -> expirationYear     = $expirationYear;
        $this -> setCvv($cvv);
}

public function getCardNumber(){
    return $this -> $cardNumber;
}

public function setCardNumber(){
    if (is_numeric($cardNumber) && strlen($cardNumber) == 16 ) {
    $this -> cardNumber = $cardNumber;
    }else {
        echo 'Inserisci un numero della carta di credito valido';
    }
}

public function getExpirationMonth(){
    return $this -> getExpirationMonth;
}

public function setExpirationMonth($expirationMonth){
    if (is_numeric($expirationMonth) && $expirationMonth >= 1 && $expirationMonth <= 12) {
    $this->expirationMonth = $expirationMonth;    
}else {
    echo 'inserisci un mese valido';
}
}

public function getExpirationYear(){
    return $this -> getExpirationYear;
}

public function setExpirationYear($expirationYear){
    if (is_numeric($expirationYear) && $expirationYear >= 0 && $expirationYear <= 99) {
        $this->expirationYear = $expirationYear;
    }else {
        echo 'Inserisci un\'anno valido';
    }
    
}
public function getCvv (){
    return $this -> cvv; 
}
public function setCvv($cvv){
    if (is_numeric($cvv) && strlen($cvv) == 3){
    return $this -> cvv = $cvv;
}else {
    echo 'Inserisci un codice di sicurezza valido';
}        
}
}

?>