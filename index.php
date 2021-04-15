<?php

// Start the session
session_start();
// Gestion of the files
require('config/dbConfig.php'); 
require('vendor/autoload.php');
include('model/entity/perso.php');


// Instanciation of the object AltoRouter
$router = new AltoRouter();
$router->setBasePath('/Projet-csi');


// Route's definition
// Definition default route
$router->map('GET','/', function() {
    include('view/homepage.php');
}); 
// Definition contact route
$router->map('GET','/contact', function() {
    include('view/contact.php');
});
// Definition product route
$router->map('GET','/produit', function() {
    include('view/product.php');
});
// Definition panier route
$router->map('GET','/panier', function() {
    include('view/panier.php');
});
// Definition espace perso route
$router->map('GET','/espace_perso', function() {
    include('view/espacePerso.php');
});
// Definition espace perso route
$router->map('GET','/403', function() {
    include('view/403.php');
});


// Match the route
$match = $router->match();


// Call the function
if ($match) {
    call_user_func_array($match['target'],$match['params']);
} else {
    include('view/404.php');
}
