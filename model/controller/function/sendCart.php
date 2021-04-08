<?php


function sendCart(int $persoAct) {

    global $conn;

    // NEW NUMBER COMMAND
    $query = (string) "SELECT MAX(idCommande) as max FROM commande";
    // Send the request
    try {
        $result = mysqli_query($conn, $query);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }
    // Create data
    while ($row = mysqli_fetch_assoc($result)) {
        $valueMax = $row['max'];
    }

    // NEW COMMAND
    // Data to inject
    $idCommand = (int) $valueMax + 1;
    $ref = (string) 'Facture '.$idCommand;
    $dateCreation = date_create('now')->format('Y-m-d');
    // Manage the query
    $queryNew = (string) "INSERT INTO `commande`(`idCommande`, `ref`, `dateCreation`, `idClient`) VALUES ($idCommand, '$ref', '$dateCreation', $persoAct)";
    // Send the request
    try {
        $result = mysqli_query($conn, $queryNew);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }

    // NEW RELATION PRODUCT/COMMAND
    // Data to inject
    $nbrProduct = 2;
    $idProduct = 3;
    // Manage the query
    $queryRelation = (string) "INSERT INTO `contenir`(`idCommande`, `idProduit`, `nbreProduit`) VALUES ($idCommand, $idProduct, $nbreProduct)";
    // Send the request
    try {
        $result = mysqli_query($conn, $queryRelation);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }
    
}
