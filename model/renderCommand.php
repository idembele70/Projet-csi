<?php


function renderCommand(int $idClient) {

    global $pdo;
    $viewCommand =  [];

    $query = (string) "SELECT * FROM commande WHERE idClient = $idClient";

    try {
        $result_command = $pdo->query($query);
        $tab_command = $result_command->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }

    foreach ($tab_command as $row) {
        $viewCommand = array(
            'idCommande' => $row['idCommande'],
            'ref' => $row['ref'], 
            'dateCreation' => $row['dateCreation'], 
            'idClient' => $row['idClient']
        );
    }

    return $viewCommand;

}
