<?php

// Gestion of the files
require('config/dbConfig.php'); 
require('vendor/autoload.php');

// Instanciation of the object AltoRouter
$router = new AltoRouter();
$router->setBasePath('/projetCommunPlayduh/projetPlayduh/');


// Route's definition 
// Definition default route
$router->map('GET','/', function() {
    include('model/controller/404.php');
});
// Character's route
// $router->map('GET|POST','/characters', function() {
//     if ($_SERVER["REQUEST_METHOD"] === 'GET') {
//         include('model/controller/getDatas.php');
//         $idVillage = (int) ($_GET['idVillage'] ?? 0);
//         $search = (string) strtolower((($_GET['search']) ?? ""));
//         getCharacters(0,$idVillage,$search);
//     } else {
//         require('model/controller/addDatas.php');
//         addDatas('characters');
//     };
// });


// Match the route
$match = $router->match();


// Call the function
if ($match) {
    call_user_func_array($match['target'],$match['params']);
} else {
    echo '404';
}
