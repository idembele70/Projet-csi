<?php

function renderProduct(int $idProduct) {

    global $conn;
    $viewProduct =  (string) "";

    $query = (string) "SELECT * FROM produit WHERE idProduit = $idProduct";

    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        // Get datas
        $viewProduct .= '<span>'.$row['idProduit'].'</span>';
        $viewProduct .= '<span>'.$row['ref'].'</span>';
        $viewProduct .= '<span>'.$row['nom'].'</span>';
        $viewProduct .= '<span>'.$row['description'].'</span>';

    }

    echo $viewProduct;


}
