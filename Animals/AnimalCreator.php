<?php 
    include_once './Animals/Chicken.php';
    include_once './Animals/Cow.php';
    include_once './Animals/AnimalType.php';

    class AnimalCreator
    {
        public static function сreate(string $animalName)
        {
            $animal = null;
            switch ($animalName){
                case AnimalTypes::CHICKEN:
                    $animal = new Chicken();
                    break;

                case AnimalTypes::COW;
                    $animal = new Cow();
                    break;
            }
            return $animal;
        }
    };

    
?>