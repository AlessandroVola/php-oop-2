<?php
    class User {
        public $name;
        public $surname;
        public $age;
        public $iscrizione;
        protected $sconto= 0;


        function __construct($_name, $_surname, $_age, $_iscrizione){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;
            $this->iscrizione = $_iscrizione;
        }

        function getSconto($iscrizione){
            if ($iscrizione == true){
                $this->sconto = 20% ;
            }
        }
    };


?>
