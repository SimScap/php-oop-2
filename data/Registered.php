<?php 

require_once __DIR__ . '/User.php';

class Registered extends User{
    public $discount;
    public $category;

    public function __construct($name, $surname, $category)
    {
    $this->name = $name;
    $this->surname = $surname;   


    if (strtolower($category) === 'true'){
        $this->category = $category; 
    }
    }

    public function setDiscount(){

        if ($this->category === 'true'){
        $this->discount = 20;
        }         
    }

    public function getDiscount(){
    return $this->discount;
    }
}

?>