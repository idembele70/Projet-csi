<?php
if (!isset($_SESSION['connected'])) {
    // Back to the homepage.php
    header('Location: ./');
} 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Perso</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script defer src="view/js/main.js" type="text/javascript"></script>
</head>

<body>

    <?php
    // Include header
    include('view/header-connecte.php');

    ?>
    <section class="bg-log contact">
        <div class="inscription-enable connexion-enable">
            <h1>Profil</h1>
            <form action="">
                <input readonly class="form-input" type="text" name="title" value="Nom">
                <input readonly class="form-input" type="email" name="username" value="E-mail">
                <input readonly class="form-input" type="email" name="username" value="Adresse de facturation">
            </form>
        </div>
    </section>

    <?php

    // Code PHP
    // include('model/controller/function/renderPerso.php');
    // include('model/controller/function/renderCommand.php');
    // IF SESSION EXISTS
    // renderPerso($_SESSION['id'] ?? 1);
    // renderCommand($_SESSION['id'] ?? 1);


    // Include footer
    include('view/footer.php');
    ?>

</body>

</html>