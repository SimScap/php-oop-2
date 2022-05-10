<?php 

require_once __DIR__ . '/User.php';


class Registered extends User {
    public string  $secondName;
    private string $email;
    private string $userName;
    private int    $age;
    private int    $discount = 20;

        function __construct(string $firstName, string $secondName, string $email, string $userName, int $age){
            parent::__construct($firstName);
            $this -> secondName   = $secondName;
            $this -> userName     = $userName;
            $this -> age          = $age;
            $this -> setEmail($email);
        }
        
        public function getDiscount() {
        return $this -> discount;
    }
    
    

    public function getSecondName(){
        return $this -> secondName;
    }
    public function setEmail($email){
        if (strpos($email, '@') !== false && strpos($email, '.') !==false) {
            return $this -> email = $email;
        } else {
            echo 'Inserisci un\'e-mail valida';
        }
    }
    public function getEmail(){
        return $this->email;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getAge(){
        return $this->age;
    }
}
?>