<?php

// include 'dbConfig.php';

function renderProduct(int $idProduct) {

    global $pdo;
    $viewProduct =  [];

    $query = (string) "SELECT * FROM produit WHERE idProduit = $idProduct";

    try {
        $result_product = $pdo->query($query);
        $tab_product = $result_product->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }

    foreach ($tab_product as $row) {
        $viewProduct = array(
            'id' => $row['idProduit'],
            'nom' => $row['ref'], 
            'prénom' => $row['nom'], 
            'mail' => $row['description'], 
            'livraison' => $row['price'], 
            'facturation' => $row['stock']
        );
    }

    return $viewProduct;

}
