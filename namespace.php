<?php

// Define the autoloader function
spl_autoload_register(function ($class_name) {
    include  'classes/' .$class_name . '.php'; // Use absolute path with __DIR__
});

// Instantiate a Product object
$product = new RamlitProduct\Product("Laptop", 1200);
echo $product->getProductDetails() . "<br>";

// Instantiate a Service object
$service = new RamlitService\Service("Repair");
echo $service->getServiceDetails();

?>
