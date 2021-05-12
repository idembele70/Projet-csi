<?php

// Commexion à la BDD
try {
    $user = "root";
    $pass = "";
    $pdo = new PDO('mysql:host=localhost:3306;dbname=playduh', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}