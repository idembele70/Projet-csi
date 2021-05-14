<?php

// Include function client
include 'command.php';
// start the session
session_start();
// Verification
if ($_POST && $_SESSION) {
    // Create data
    $nameId = (int) $_SESSION['id'];
    $data = (array) $_POST;
    // Call the function createClient
    createCommand($nameId, $data);
}
// Back to the attente.php
header('Location: ../');

?>