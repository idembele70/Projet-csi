<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 404</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/style.css">
    <script defer src="view/js/main.js"></script>
</head>

<body>
    <?php
    // Include header
    include('view/header-deconnecte.php');
    ?>
    
    <div class="e404">
        <h2 class="e404-title">404</h2>
        <p>page non trouvé</p>
        <a href="/projet-csi/">Retour à l'accueil</a>
    </div>
    
    <?php
        // Include footer
        include('view/footer.php');
    ?>
</body>

</html>