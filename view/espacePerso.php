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
    <link rel="icon" type="image/png" href="view/assets/img/logo-playduh-favicon.png"/>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <script defer src="view/js/main.js" type="text/javascript"></script>
</head>

<body class="espacePerso">

    <?php
    // Include header
    include('view/header-connecte.php');
    ?>

    <?php
    // data client
    $data = renderPerso($_SESSION['id']);
    ?>
    <main>
        <h1 class="h1-profil">Profil</h1>
        <form>
            <div class="line-info">Nom:&nbsp;<?php echo $data['nom']?></div>
            <div class="line-info">Prénom :&nbsp;<?php echo $data['prénom']?></div>
            <div class="line-info">Mail :&nbsp;<?php echo $data['mail']?></div>
            <div class="line-info">Adresse :&nbsp;<?php echo $data['livraison']?></div>
        </form>
    </main>
    <?php
    // Include footer
    include('view/footer.php');
    ?>

</body>

</html>