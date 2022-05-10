<?php 

require_once __DIR__ . '/User.php';

class PremiumUser extends User{
    public $discount;
    public $category;

    public function __construct($_name, $_surname, $_category)
    {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;

    if (strtolower($_category) === 'true' || strtolower($_category) === 'false'){
        $this->category = $_category; 
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