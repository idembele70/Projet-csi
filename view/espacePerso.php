<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Perso</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/css/style.css">
    <script defer src="view/js/main.js"></script>
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
    include('model/controller/function/renderPerso.php');
    include('model/controller/function/renderCommand.php');
    // IF SESSION EXISTS
    renderPerso($_SESSION['id'] ?? 1);
    renderCommand($_SESSION['id'] ?? 1);


    // Include footer
    include('view/footer.php');
    ?>

</body>

</html>