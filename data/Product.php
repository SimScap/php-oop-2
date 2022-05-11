<?php  
    class Product{
        public $name;
        public $category;
        public $price;
    
        public function __construct($name, $category, $price)
        {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        }
    }
    
    ?>
