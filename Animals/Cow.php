<?php 
    include_once './Animals/Animal.php';

    class Cow extends Animal
    {
        public function __construct()
        {
            parent::__construct();
            $this->name = 'Корова';
        }

        public function getProducts()
        {
            return rand(8, 12);
        }
    }
