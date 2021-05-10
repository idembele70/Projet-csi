<?php

// Include function client
include 'client.php';
// start the session
session_start();
// Verification
if ((filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) && isset($_POST['password'])  && isset($_POST['name'])  && isset($_POST['surname'])  && isset($_POST['livraison'])  && isset($_POST['facturation'])) {

    // Securization of data
    $name = (string) trim(htmlspecialchars(strip_tags($_POST["name"])));
    $surname = (string) trim(htmlspecialchars(strip_tags($_POST["surname"])));
    $mail = (string) trim(htmlspecialchars(strip_tags($_POST["mail"])));
    $password = (string) trim(htmlspecialchars(strip_tags($_POST["password"])));
    $livraison = (string) trim(htmlspecialchars(strip_tags($_POST["livraison"])));
    $facturation = (string) trim(htmlspecialchars(strip_tags($_POST["facturation"])));
    // Verify if the client is save on DB
    createClient($name, $surname, $mail, $password, $livraison, $facturation);
}
// Back to the attente.php
header('Location: ../');

?>