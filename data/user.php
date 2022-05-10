<?php

class User {
    public string $firstName;

    function __construct(string $firstName) {
        $this -> firstName  = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }
}
?> 
