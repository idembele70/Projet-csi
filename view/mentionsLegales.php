<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions légales</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/Projet-csi/view/css/style.css">
    <script defer src="http://localhost/Projet-csi/view/js/main.js" type="text/javascript"></script>
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
    
    <div>
        <h2>Mentions légales</h2>
    </div>
    
    <div id="containerMention">
        <div id="editeur">
            <p>
            <h3><b>Editeur<b></h3>
            SARL ORT_ELEVE Numéro de SIRET : 75221735600027
            Responsable éditorial : JOHN
            12 Rue du Huit Mai 1945, 60350 ATTICHY
            Téléphone : 01 23 45 67 89
            Email : contact@playduh.fr
            Site Web : playduh.fr
            </p>
        </div>
        <div id="herbegement">
            <p>
            <h3><b>Hébergement</b></h3>
            Hébergeur : SARL ORT_ELEVE
            12 Rue du Huit Mai 1945, 60350 ATTICHY
            Site Web : playduh.fr
            </p>
        </div>
        <div id="developpement">
            <p>
            <h3><b>Développement</b></h3>
            SARL ORT_ELEVE
            Adresse : 12 Rue du Huit Mai 1945, 60350 ATTICHY
            Site Web : playduh.fr
            </p>
        </div>
        <div id="condition">
            <p>
                <h3><b>Conditions d'utilisations</b></h3>
                Ce site (playduh).fr) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…
                ) pour un meilleur confort d’utilisation et un graphisme plus agréable.

                Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, 
                Google Chrome, etc…

                L’agence web ORT_ELEVE met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une
                    
                mise à jour fiable de ses sites internet.

                Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des 
                informations auprès de AntheDesign , et signaler toutes modifications du site qu’il jugerait utile. AntheDesign 
                n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.

                <b>Cookies</b> : Le site playduh.fr peut-être amené à vous demander l’acceptation des cookies pour des besoins 
                de statistiques et d’affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site
                que vous visitez.

                Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur
                accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles 
                sans l’acceptation de cookies.

                <b>Liens hypertextes</b> : Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres
                ressources disponibles sur Internet. SARL ORT_ELEVE ne dispose d’aucun moyen pour contrôler les sites en
                connexion avec ses sites internet.

                ORT_ELEVE ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. 
                Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.

                Les utilisateurs, les abonnés et les visiteurs des sites internet  ne peuvent pas mettre en place un hyperlien en 
                direction de ce site sans l’autorisation expresse et préalable de SARL ORT_ELEVE.

                Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de SARL ANTHEDESIGN, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien.

                La SARL ORT_ELEVE se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.
            </p>
        </div>
    </div>
    
    <?php
        // Include footer
        include('view/footer.php');
    ?>
</body>

</html>