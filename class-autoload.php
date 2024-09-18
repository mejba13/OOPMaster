<?php

// Define the autoloader function
spl_autoload_register(function ($class_name) {
    include  'classes/' .$class_name . '.php'; // Use absolute path with __DIR__
});

// Instantiate classes

$manager = new ProductManager();
echo $manager->getManager()."<br>";

$manager1 = new ColorPark();
echo $manager1->getActivity()."<br>";

$RamlitSoftware = new RamlitSoftware();
echo $RamlitSoftware->CompanyActivity();

?>
