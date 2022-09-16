<?php 
    require_once './Ferm/Farm.php';
    require_once './Animals/AnimalType.php';

    $farm = new Farm();

    // Добавляем 20 кур
    for ($i = 0; $i < 20; $i++) 
    { 
        $farm->addAnimal(AnimalTypes::CHICKEN);
    }

    // Добавляем 20 коров
    for ($i = 0; $i < 10; $i++) 
    { 
        $farm->addAnimal(AnimalTypes::COW);
    }

    print_r("Колличество животных \n");
    print_r($farm->getAnimalCountByType());

    // Собираем продукцию
    for ($i = 0; $i < 7; $i++) 
    { 
        $farm->assembleProducts();
    }
    
    print_r("Наш урожай \n");
    print_r($farm->getProducts());

    // Добавляем ещё 5 кур
    for ($i = 0; $i < 5; $i++) 
    { 
        $farm->addAnimal(AnimalTypes::CHICKEN);
    }

    // Добавляем 1 корову
    $farm->addAnimal(AnimalTypes::COW);

    print_r("Колличество животных \n");
    print_r($farm->getAnimalCountByType());

    // Собираем продукцию
    for ($i = 0; $i < 7; $i++) 
    { 
        $farm->assembleProducts();
    }

    print_r($farm->getProducts());

?>