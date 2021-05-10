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
        <h1>Profil</h1>
        <div><?php var_dump($data); ?></div>
        <form>
            <input type='text' placeholder="Nom" name="nom" id="nom" disabled>
            <input type='email' placeholder="E-mail" name="email" id="email" disabled>
            <input type='text' placeholder="Adresse de facturation" name="adresse" id="adresse" disabled>
        </form>
    </main>
    <?php
    // Include footer
    include('view/footer.php');
    ?>

</body>

</html>