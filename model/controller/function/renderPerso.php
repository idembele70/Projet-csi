<?php

function renderPerso(int $persoAct) {

    global $pdo;
    $viewPerso = (object) '';

    $query = (string) "SELECT * FROM client WHERE idClient = $persoAct";

    try {
        $result_client = $pdo->query($query);
        $tab_client = $result_client->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }

    foreach ($tab_client as $row) {
        $viewPerso = new Perso($row['idClient'], $row['nom'], $row['prenom'], $row['adresseMail'], $row['adresseLivraison'], $row['adresseFacturation']);
    }

    echo $viewPerso->getDatas();

}
