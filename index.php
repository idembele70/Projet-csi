<?php

// Gestion of the files
require('config/dbConfig.php'); 
require('vendor/autoload.php');
include('model/entity/perso.php');


// Instanciation of the object AltoRouter
$router = new AltoRouter();
$router->setBasePath('/projetPlayduh');


// Route's definition
// Definition default route
$router->map('GET','/accueil', function() {
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


// Match the route
$match = $router->match();


// Call the function
if ($match) {
    call_user_func_array($match['target'],$match['params']);
} else {
    include('view/404.php');
}
