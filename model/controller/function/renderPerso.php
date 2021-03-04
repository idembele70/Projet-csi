<?php


function renderPerso(int $persoAct) {

    global $conn;
    $viewPerso = (object) '';

    $query = (string) "SELECT * FROM client WHERE idClient = $persoAct";

    try {
        $result = mysqli_query($conn, $query);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }

    while ($row = mysqli_fetch_assoc($result)) {

        $viewPerso = new Perso($row['idClient'], $row['nom'], $row['prenom'], $row['adresseMail'], $row['adresseLivraison'], $row['adresseFacturation']);

    }

    echo $viewPerso->getDatas();

}
