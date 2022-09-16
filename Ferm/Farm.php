<?php 

    include_once './Animals/AnimalCreator.php';
    include_once './Ferm/Barn.php';
    include_once './Ferm/Basket.php';
    class Farm
    {   
        private Barn $barn;
        private Basket $basket;

        public function __construct()
        {
            $this->barn = new Barn();
            $this->basket = new Basket();
        }

        public function addAnimal(string $animalName)
        {
            return $this->barn->addAnimal($animalName);
        }

        public function assembleProducts()
        {
            foreach($this->barn->getAnimals() as $animal)
            {
                $this->basket->addProduct($animal->getName(), $animal->getProducts());
            }
        }

        public function getAllProducts()
        {
            return array_sum($this->basket->getProducts());
        }

        public function getAnimalCountByType()
        {
            return $this->barn->getAnimalCountByType();
        }

        public function getProducts()
        {
            return $this->basket->getProducts();
        }
    }

?>