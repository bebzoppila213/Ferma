<?php 
    include_once './Animals/Animal.php';

    class Chicken extends Animal
    {
        public function __construct()
        {
            parent::__construct();
            $this->name = 'Курица';
        }
        
        public function getProducts()
        {
            return rand(0, 1);
        }
    }