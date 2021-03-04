<?php


// Include header
include('header.php');


// Code PHP
include('function/renderPerso.php');
include('function/renderCommand.php');
renderPerso($idPerso ?? 1);
renderCommand($idPerso ?? 1);


// Include footer
include('footer.php');