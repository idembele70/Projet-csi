<?php

// Gestion of the files
require('config/dbConfig.php'); 
require('vendor/autoload.php');


// Instanciation of the object AltoRouter
$router = new AltoRouter();
$router->setBasePath('/projetCommunPlayduh/projetPlayduh');


// Route's definition
// Definition default route
$router->map('GET','/', function() {
    include('model/controller/homepage.php');
}); 
// Definition contact route
$router->map('GET','/contact', function() {
    include('model/controller/contact.php');
});
// Definition product route
$router->map('GET','/produit', function() {
    include('model/controller/product.php');
});
// Definition panier route
$router->map('GET','/panier', function() {
    include('model/controller/panier.php');
});



// Match the route
$match = $router->match();


// Call the function
if ($match) {
    call_user_func_array($match['target'],$match['params']);
} else {
    include('model/controller/404.php');
}
