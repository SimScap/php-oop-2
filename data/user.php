<?php
class User{

    public $name;
    public $surname;
    public $dateOfBirth;
    public $address;
    public $creditCard;
    public $cart = array();


    public function __construct($name, $surname)
    {
    $this->name = $name;
    $this->surname = $surname;
    }

    
    public function getCreditCard($card){
    $this->creditCard = $card;
    }

    public function addProduct($prod){
    $this->cart[] = $prod;  
    }
    
}
?> 
