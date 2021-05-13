<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="view/assets/img/logo-playduh-favicon.png"/>
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
    ?>

    <div class="contact">
        <div class="contact-content">
            <h1>Contactez nous</h1>
            <form action="/contact.php">
                <input class="contact-input" type="text" name="title" placeholder="Nom - Prénom" required>
                <input class="contact-input" type="email" name="username" placeholder="E-mail" required>
                <textarea class="form-textarea" name="message" rows="12" placeholder="Message" required></textarea>
                <input class="valider-connexion" type="submit" value="Envoyer">
            </form>
        </div>
    </div>

    <?php
        // Include footer
        include('view/footer.php');
    ?>

</body>

</html>
