<?php
class User{
    public string $firstName;
    public string $secondName;
    private string $email;
    private string $userName;
    private int    $age;

    function __construct(string $firstName, string $secondName, string $email, string $userName, int $age) {
    $this -> firstName    = $firstName;
    $this -> secondName   = $secondName;
    $this -> userName     = $userName;
    $this -> age          = $age;
    $this -> setEmail($email);
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function getSecondName(){
        return $this->secondName;
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