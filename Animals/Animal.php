<?php 
    include_once './Traits/UniqueNumber.php';

    abstract class Animal
    {   
        // use UniqueNumber;
        protected $name;

        public function __construct()
        {
            // $this->initialization();
        }

        abstract public function getProducts();

        public function getName()
        {
            return $this->name;
        }
    }

?>