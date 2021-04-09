<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/style.css">
    <script defer src="view/js/main.js"></script>
</head>

<body>

    <?php
    // include './model/controller/_login.php';
    include 'header-deconnecte.php';
    echo 'product';
    // Code PHP
    include('function/renderProduct.php');
    renderProduct($idProduct ?? 2);
    ?>
    <div class="container-product">
        <img src="view/assets/img/item_sushi.png" alt="image d'un article ">
        <div class=""> <span>Les sushi</span>
            <span>Nulla ex libero</span>
            <span>porta eget</span>
        </div>
        <div class="">
            <button>Ajouter au panier</button>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
        </div>
    </div>
    <?php
    include('view/footer.php');
    ?>
    
</body>

</html>