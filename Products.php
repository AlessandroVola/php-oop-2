<?php
    class Product {
        public $name;
        public $price;
        public $animal;
        public $category;


        function __construct($_name, $_price, $_animal){
            $this->name = $_name;
            $this->price = $_price;
            $this->animal = $_animal;
        }
    }

    class Food extends Product {
        public $food_type;
        public $amount;
        public $category = 'Food';

        function __construct($_name, $_price, $_animal, $_food_type, $_amount){
            parent::__construct($_name, $_price, $_animal);
            $this->food_type = $_food_type;
            $this->amount = $_amount;
        }
    };
    
    class Game extends Product{
        public $category = 'Game';
        public $material;
    }


?>