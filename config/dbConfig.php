<?php

$server = "localhost:3308";
$username = "root";
$password = "";
$db = "playduh";
$conn = mysqli_connect($server,$username,$password,$db);

// Commexion à la BDD
// try {
//     $user = "root";
//     $pass = "";
//     $pdo = new PDO('mysql:host=localhost;dbname=playduh', $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $pdo;
    
// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }