<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="view/assets/img/logo-playduh-favicon.png"/>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script defer src="view/js/main.js" type="text/javascript"></script>
</head>

<body class="homepage">

    <?php
    // Include header
    if (isset($_SESSION['connected']) == true) {
        include('view/header-connecte.php');
    } else {
        include('view/header-deconnecte.php');
    }
    ?>

    <div id="slider">
        <figure>
                <img src="view/assets/img/img_slider_home.png">
                <img src="view/assets/img/img_slider_home_2.png">
                <img src="view/assets/img/img_slider_home_3.png">
                <img src="view/assets/img/img_slider_home.png">
        </figure>
    </div>

    <div class="titre_article">
        <h1>
            Les Articles
        </h1>
    </div>
    <div class="container_article_item">
        <a class="link_article" href="produit?id=1">
            <div class="item_article">
                <img src="view/assets/img/fimo1.png">
                <p>Les sushis</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=2">
            <div class="item_article">
                <img src="view/assets/img/fimo2.png">
                <p>Les desserts</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=3">
            <div class="item_article">
                <img src="view/assets/img/fimo3.png">
                <p>Le pack débutant</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=4">
            <div class="item_article">
                <img src="view/assets/img/fimo4.png">
                <p>Le panda</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=5">
            <div class="item_article">
                <img src="view/assets/img/fimo5.png">
                <p>Le flamant rose</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=6">
            <div class="item_article">
                <img src="view/assets/img/fimo6.png">
                <p>La licorne</p>
            </div>
        </a>
    </div>

    <?php
    // Include footer
    include('view/footer.php');
    ?>
</body>

</html>