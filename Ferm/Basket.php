<?php 

    class Basket
    {
        private array $products;
        
        public function addProduct(string $animalName, $product)
        {
            if(isset($this->products[$animalName]))
            {
                $this->products[$animalName] += $product;
            }else
            {
                $this->products[$animalName] = $product;
            }
        }

        public function getProducts()
        {
            return $this->products;
        }
    }

?>