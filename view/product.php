<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script defer src="view/js/main.js" type="text/javascript"></script>
</head>

<body>

    <?php
    // Include header
    if(isset($_SESSION['connected']) == true) {
        include('view/header-connecte.php');
    } else {
        include('view/header-deconnecte.php');
    }
    // Code PHP
    ?>
    <div class="container-product">
        <img class="article-image" src="/Projet-csi/view/assets/img/item_sushi.png" alt="image d'un article ">
        <div class="product-description">
            <div class="product-title">
                <h2>Les sushi</h2>
                <h2>Nulla ex libero,</h2>
                <h2>porta eget</h2>
            </div>
            <span>
                <a href="">Ajouter au panier</a></span>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
        </div>
    </div>
    <?php
    // include footer;
    include 'footer.php';?>
    
</body>

</html>