<?php 

// Start session
session_start();

// Destroy session
session_destroy();

// Delete the identifier's in session
unset($_SESSION['id']);
unset($_SESSION['mail']);
unset($_SESSION['password']);

// Back to the attente.php
header('Location: ../');