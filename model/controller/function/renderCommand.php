<?php

function renderCommand(int $persoAct) {

    global $conn;
    $viewCommand = (string) '';

    $query = (string) "SELECT com.idCommande, com.ref, com.dateCreation, pro.nom FROM commande as com INNER JOIN contenir as con ON com.idCommande = con.idCommande INNER JOIN produit as pro ON pro.idProduit = con.idProduit WHERE com.idClient = 1";

    try {
        $result = mysqli_query($conn, $query);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }
    
    while ($row = mysqli_fetch_assoc($result)) {
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
