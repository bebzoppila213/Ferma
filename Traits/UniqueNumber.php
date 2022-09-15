<?php 

    trait UniqueNumber{
        private $id;

        public function getUniquNumber()
        {
            return $this->id;
        }

        public function initialization()
        {
            $this->id = rand(0, 10000);
        }
    }

?>