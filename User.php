<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    class User {
        public $address;

        public $email;

        public $creditCardNumber;
        public $creditCardExpiryDate;
        public $creditCardOwner;
        public $creditCardCvv;
        
        public $cart = [];
        
    


        function __construct($_email){
            $this->email = $_email;
            
        }

        public function addProduct($product){
            $this->cart[] = $product;
        }       

        public function checkOut(){
            $totalPrice = 0;
            $totalVat = 0;

            foreach($this->products as $product){
                $totalPrice += $product->price ;
                $totalVat += ($product->price * $product->vat / 100) ;
            }return{
                'total' => $totalPrice;
                'vat' => $totalVat;
                'granTotal' => $totalPrice + $totalVat;
            };
        }
    };


    class RegisteredUser extends User{
        public $name;
        public $surname;
        private $password;

        public function checkOut(){
            $totalCartPrice = parent::checkout();

            return{
                'total' => $totalCartPrice['total']* 0.8;
                'vat' => $totalVat;
                'granTotal' => $totalPrice + $totalVat;
            };
        }
    };


?>
