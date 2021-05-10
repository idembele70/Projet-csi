<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script defer src="view/js/main.js" type="text/javascript"></script>
</head>

<body>
    <?php
    // Include header
    if (isset($_SESSION['connected']) == true) {
        include('view/header-connecte.php');
    } else {
        include('view/header-deconnecte.php');
    }
    ?>
    <div class="panier">
        <h1>Panier</h1>
        <div class="article">
            <img src="view/assets/img/fimo1.png" alt="image d'un article ">
            <div class="infos">
                <h4>Les sushi Nulla ex libero porta eget</h4>
                <p class="article-description"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque harum doloribus maxime, eius mollitia velit ut minima delectus, placeat, eos ad. Sit, cum. Nobis ullam deleniti nesciunt ratione, unde nostrum?</p>
                <button>Retiré du panier</button>
            </div>
        </div>

        <!--  <div class="article">
                <img src="view/assets/img/fimo2.png" alt="image d'un article ">
                <div class="infos">
                    <h4>Les sushi Nulla ex libero porta eget</h4>
                    <span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque harum doloribus maxime, eius mollitia velit ut minima delectus, placeat, eos ad. Sit, cum. Nobis ullam deleniti nesciunt ratione, unde nostrum?</span>
                    <button>Retiré du panier</button>
                </div>
            </div>-->
    </div>
    <?php

    // Include footer
    include('view/footer.php');
    ?>
</body>

</html>