<?php

function renderProduct(int $idProduct) {

    global $conn;
    $viewProduct =  (string) "";

    $query = (string) "SELECT * FROM produit WHERE idProduit = $idProduct";

    try {
        $result = mysqli_query($conn, $query);
    } catch(Exception $erreur) {
        exit('Problème de connexion à la DB.'.$erreur);
    }

    while ($row = mysqli_fetch_assoc($result)) {
        // Get datas
        $viewProduct .= '<div>';
        $viewProduct .= '<span>'.$row['idProduit'].'</span>';
        $viewProduct .= '<span>'.$row['ref'].'</span>';
        $viewProduct .= '<span>'.$row['nom'].'</span>';
        $viewProduct .= '<span>'.$row['description'].'</span>';
        $viewProduct .= '</div>';

    }

    echo $viewProduct;


}
