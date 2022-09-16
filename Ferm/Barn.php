<?php 

    class Barn
    {
        private array $animals = [];
        private array $products = [];

        public function addAnimal(string $animalName)
        {
            $uniqueId = rand(0, 1000) * rand(1, 6) * rand(5, 65);
            $this->animals[$uniqueId] = AnimalCreator::сreate($animalName);
        }

        public function getAnimals()
        {
            return $this->animals;
        }

        public function getAnimalCountByType()
        {
            $animalCount = [];
            foreach($this->animals as $animal)
            {
                if(isset($animalCount[$animal->getName()]))
                {
                    $animalCount[$animal->getName()] += 1;
                }else
                {
                    $animalCount[$animal->getName()] = 1;
                }   
                
            }
            return $animalCount; 
        }

        public function assembleProducts()
        {
            foreach($this->animals as $animal)
            {
                if(isset($this->products[$animal->getName()]))
                {
                    $this->products[$animal->getName()] += $animal->getProducts();
                }else
                {
                    $this->products[$animal->getName()] = $animal->getProducts();
                }
            }

            return $this->products;
        }
    }

?>