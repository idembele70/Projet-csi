<?php

// Include function client
include 'client.php';
// start the session
session_start();

var_dump($_SESSION[0]);
// Verification
if (true) {



    // Securization of data
    $name = (string) trim(htmlspecialchars($_POST["name"]));
        $surname = (string) trim(htmlspecialchars($_POST["surname"]));
    $mail = (string) trim(htmlspecialchars($_POST["mail"]));
    $password = (string) trim(htmlspecialchars($_POST["password"]));
    $livraison = (string) trim(htmlspecialchars($_POST["livraison"]));
    $facturation = (string) trim(htmlspecialchars($_POST["facturation"]));

    // Call the function createClient
    createClient($name, $surname, $mail, $password, $livraison, $facturation);
}
// Back to the attente.php
// header('Location: ../');

?>