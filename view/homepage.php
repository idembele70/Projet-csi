<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
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

    <div class="titre_article">
        <h1>
            Les Articles
        </h1>
    </div>
    <div class="container_article_item">
        <a class="link_article" href="produit?id=1">
            <div class="item_article">
                <img src="/Projet-csi/view/assets/img/item_sushi.png">
                <p>Les sushis</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=2">
            <div class="item_article">
                <img src="/Projet-csi/view/assets/img/item_desert.png">
                <p>Les desserts</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=3">
            <div class="item_article">
                <img src="/Projet-csi/view/assets/img/item_pack_debutant.png">
                <p>Le pack débutant</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=4">
            <div class="item_article">
                <img src="/Projet-csi/view/assets/img/item_panda.png">
                <p>Le panda</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=5">
            <div class="item_article">
                <img src="/Projet-csi/view/assets/img/item_flamant.png">
                <p>Le flament rose</p>
            </div>
        </a>
        <a class="link_article" href="produit?id=6">
            <div class="item_article">
                <img src="/Projet-csi/view/assets/img/item_licorna.png">
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