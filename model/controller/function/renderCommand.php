<?php

function renderCommand(int $persoAct) {

    global $pdo;
    $viewCommand = (string) '';

    $query = (string) "SELECT com.idCommande, com.ref, com.dateCreation, pro.nom FROM commande as com INNER JOIN contenir as con ON com.idCommande = con.idCommande INNER JOIN produit as pro ON pro.idProduit = con.idProduit WHERE com.idClient = $persoAct";

    try {
        $result_command = $pdo->query($query);
        $tab_command = $result_command->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }
    
    foreach ($tab_command as $row) {
        // Get datas
        $viewCommand .= '<div>';
        $viewCommand .= '<span>'.$row['idCommande'].'</span>';
        $viewCommand .= '<span>'.$row['ref'].'</span>';
        $viewCommand .= '<span>'.$row['dateCreation'].'</span>';
        $viewCommand .= '<span>'.$row['nom'].'</span>';
        $viewCommand .= '</div>';

    }

    echo $viewCommand;
}
