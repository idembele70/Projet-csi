<?php


// Include header
include('header.php');


// Code PHP
include('function/renderPerso.php');
include('function/renderCommand.php');
// IF SESSION EXISTS
renderPerso($_SESSION['id'] ?? 1);
renderCommand($_SESSION['id'] ?? 1);


// Include footer
include('footer.php');