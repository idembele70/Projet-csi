<?php

// Include function client
include 'client.php';
// start the session
session_start();
// Verification
if ((filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) && isset($_POST['password'])) {
    // Securization of data
    $username = (string) trim(htmlspecialchars($_POST["username"]));
    $password = (string) trim(htmlspecialchars($_POST["password"]));
    // Verify if the client is save on DB
    verifClient($username, $password);
}
// Back to the attente.php
header('Location: ../');

?>