<?php

// Include function client
include 'client.php';
// start the session
session_start();
// Verify if the client is save on DB
verifClient($_POST['username'], $_POST['password']);
// Back to the attente.php
header('Location: ../');

?>