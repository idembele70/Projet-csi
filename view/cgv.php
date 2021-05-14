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

<body class="cgv">
    <?php
        // Include header
        if(isset($_SESSION['connected']) == true) {
            include('view/header-connecte.php');
        } else {
            include('view/header-deconnecte.php');
        }
    ?>
    <div id="containerCGV">
        <div id="conditionGenerale">
            
        <div>
            <h2>Conditions générales de vente des produits vendus sur playduh.fr</h2></br>
        </div>
            <div id = "cgvArticle1">
                <p>
                    Date de dernière mise à jour 12/05/2021

                    <b>Article 1 - Objet</b></br>

                    Les présentes conditions régissent les ventes par la société ORT_ELEVE de pate fimo. 
                </p>
            </div>
            <div id = "cgvArticle2">
                <p>
                    <b>Article 2 - Prix</b></br>

                    Les prix de nos produits sont indiqués en euros toutes taxes comprises (TVA et autres taxes applicables au jour de la commande), sauf indication contraire et hors frais de traitement et d'expédition. 

                    En cas de commande vers un pays autre que la France métropolitaine vous êtes l'importateur du ou des produits concernés. Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ces droits et sommes ne relèvent pas du ressort de la société 

                    ORT_ELEVE. Ils seront à votre charge et relèvent de votre entière responsabilité, tant en termes de déclarations que de paiements aux autorités et organismes compétents de votre pays. Nous vous conseillons de vous renseigner sur ces aspects auprès de vos autorités locales. 

                    Toutes les commandes quelle que soit leur origine sont payables en euros.  

                    La société se réserve le droit de modifier ses prix à tout moment, mais le produit sera facturé sur la base du tarif en vigueur au moment de la validation de la commande et sous réserve de disponibilité. 

                    Les produits demeurent la propriété de la société ORT_ELEVE jusqu'au paiement complet du prix.  

                    Attention : dès que vous prenez possession physiquement des produits commandés, les risques de perte ou d'endommagement des produits vous sont transférés. 
                </p>
            </div>
            <div id = "cgvArticle3">
                <p>
                    <b>Article 3 - Commandes</b></br>

                    Vous pouvez passer commande : 

                    Détailler les modalités choisies, par exemple :  

                    Sur Internet : playduh.fr (adresse du site)
                    Par téléphone au 01 23 45 67 89 pendant les heures d'ouvertures ( lundi au samedi de 8h à 20h).
                    Les informations contractuelles sont présentées en langue française et feront l'objet d'une confirmation au plus tard au moment de la validation de votre commande.  

                    La société ORT_ELEVE se réserve le droit de ne pas enregistrer un paiement, et de ne pas confirmer une commande pour quelque raison que ce soit, et plus particulièrement en cas de problème d'approvisionnement, ou en cas de difficulté concernant la commande reçue. 
                </p>
            </div>
            <div id = "cgvArticle4">
                <p>
                    <b>Article 4 - Validation de votre commande</b></br>

                    Toute commande figurant sur le site Internet playduh.fr suppose l'adhésion aux présentes Conditions Générales. Toute confirmation de commande entraîne votre adhésion pleine et entière aux présentes conditions générales de vente, sans exception ni réserve.  

                    L'ensemble des données fournies et la confirmation enregistrée vaudront preuve de la transaction. 

                    Vous déclarez en avoir parfaite connaissance.  

                    La confirmation de commande vaudra signature et acceptation des opérations effectuées.  

                    Un récapitulatif des informations de votre commande et des présentes Conditions Générales, vous sera communiqué en format PDF via l'adresse e-mail de confirmation de votre commande. 
                </p>
            </div>
            <div id = "cgvArticle5">
                <p>
                    <b>Article 5 - Paiement</b></br>

                    Le fait de valider votre commande implique pour vous l'obligation de payer le prix indiqué.  

                    Le règlement de vos achats s'effectue par carte bancaire grâce au système sécurisé

                    Le débit de la carte n'est effectué qu'au moment de l'expédition de la commande. En cas de livraisons fractionnées, seuls les produits expédiés sont débités. 
                </p>
            </div>
            <div id = "cgvArticle6">
                <p>
                    <b>Article 6 - Rétractation</b></br>

                    Conformément aux dispositions de l'article L.121-21 du Code de la Consommation, vous disposez d'un délai de rétractation de 14 jours à compter de la réception de vos produits pour exercer votre droit de rétraction sans avoir à justifier de motifs ni à payer de pénalité.  

                    Les retours sont à effectuer dans leur état d'origine et complets (emballage, accessoires, notice). Dans ce cadre, votre responsabilité est engagée. Tout dommage subi par le produit à cette occasion peut être de nature à faire échec au droit de rétractation. 

                    Les frais de retour sont à votre charge. 

                    En cas d'exercice du droit de rétractation, la société ORT_ELEVE procédera au remboursement des sommes versées, dans un délai de 14 jours suivant la notification de votre demande et via le même moyen de paiement que celui utilisé lors de la commande. 
                </p>
            </div>
            <div id = "exception">
                <p>
                    <b>EXCEPTIONS AU DROIT DE RETRACTATION</b></br>

                    Conformément aux dispositions de l'article L.121-21-8 du Code de la Consommation, le droit de rétractation ne s'applique pas à :  

                    </br>La fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.
                    La fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché financier échappant au contrôle du professionnel et susceptibles de se produire pendant le délai de rétractation.
                    La fourniture de biens confectionnés selon les spécifications du consommateur ou nettement personnalisés.
                    La fourniture de biens susceptibles de se détériorer ou de se périmer rapidement.
                    La fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne peuvent être renvoyés pour des raisons d'hygiène ou de protection de la santé.
                    La fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de manière indissociable avec d'autres articles ;
                    La fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente jours et dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché échappant au contrôle du professionnel.
                    La fourniture d'enregistrements audio ou vidéo ou de logiciels informatiques lorsqu'ils ont été descellés par le consommateur après la livraison.
                    La fourniture d'un journal, d'un périodique ou d'un magazine, sauf pour les contrats d'abonnement à ces publications.
                    Les transactions conclues lors d'une enchère publique.
                    La fourniture d'un contenu numérique non fourni sur un support matériel dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.
                </p>
            </div>
            <div id = "cgvArticle7">
                <p> 
                    <b>Article 7- Disponibilité</b></br>

                    Nos produits sont proposés tant qu'ils sont visibles sur le site plzyduh.fr et dans la limite des stocks disponibles. Pour les produits non stockés, nos offres sont valables sous réserve de disponibilité chez nos fournisseurs.
                    En cas d'indisponibilité de produit après passation de votre commande, nous vous en informerons par mail. Votre commande sera automatiquement annulée et aucun débit bancaire ne sera effectué.  

                    En outre, le site Internet playduh.fr n'a pas vocation à vendre ses produits en quantités importantes. Par conséquent la société ORT_ELEVE se réserve le droit de refuser les commandes de 10 articles identiques. 
                </p>
            </div>
            <div id = "cgvArticle8">
                <p>
                    <b>Article 8 - Livraison</b></br>

                    Les produits sont livrés à l'adresse de livraison indiquée au cours du processus de commande, dans le délai indiqué sur la page de validation de la commande. 

                    En cas de retard d'expédition, un mail vous sera adressé pour vous informer d'une éventuelle conséquence sur le délai de livraison qui vous a été indiqué.  

                    Conformément aux dispositions légales, en cas de retard de livraison, vous bénéficiez de la possibilité d'annuler la commande dans les conditions et modalités définies à l'article L 138-2 du Code de la Consommation. Si entre temps vous recevez le produit nous procéderons à son remboursement et aux frais d'acheminement dans les conditions de l'article L 138-3 du Code de la Consommation. 

                    En cas de livraisons par une transporteur, la société ORT_ELEVE ne peut être tenue pour responsable de retard de livraison dû exclusivement à une indisponibilité du client après plusieurs propositions de rendez-vous. 
                </p>
            </div>
            <div id = "cgvArticle9">
                <p>
                    <b>Article 9 - Garantie</b></br>

                    Tous nos produits bénéficient de la garantie légale de conformité et de la garantie des vices cachés, prévues par les articles 1641 et suivants du Code civil. En cas de non-conformité d'un produit vendu, il pourra être retourné, échangé ou remboursé.  

                    Toutes les réclamations, demandes d'échange ou de remboursement doivent s'effectuer par mail : contact@playduh.fr / téléphone : 01 23 45 67 89 dans le délai de 30 jours de la livraison.  

                    Les produits doivent nous être retournés dans l'état dans lequel vous les avez reçus avec l'ensemble des éléments (accessoires, emballage, notice...). Les frais d'envoi vous seront remboursés sur la base du tarif facturé et les frais de retour vous seront remboursés sur présentation des justificatifs. 

                    Les dispositions de cet Article ne vous empêchent pas de bénéficier du droit de rétractation prévu à l'article 6. 
                </p>
            </div>
            <div id = "cgvArticle10">
                <p>
                    <b>Article 10 - Responsabilité</b></br>

                    Les produits proposés sont conformes à la législation française en vigueur. La responsabilité de la société ORT_ELEVE ne saurait être engagée en cas de non-respect de la législation du pays où le produit est livré. Il vous appartient de vérifier auprès des autorités locales les possibilités d'importation ou d'utilisation des produits ou services que vous envisagez de commander. 

                    Par ailleurs, la société ORT_ELEVE ne saurait être tenue pour responsable des dommages résultant d'une mauvaise utilisation du produit acheté. 

                    Enfin la responsabilité de la société ne saurait être engagée pour tous les inconvénients ou dommages inhérents à l'utilisation du réseau Internet, notamment une rupture de service, une intrusion extérieure ou la présence de virus informatiques. 
                </p>
            </div>
            <div id = "cgvArticle11">
                <p>
                    <b>Article 11 - Droit applicable en cas de litiges</b></br>

                    La langue du présent contrat est la langue française. Les présentes conditions de vente sont soumises à la loi française. En cas de litige, les tribunaux français seront les seuls compétents. 
                </p>
            </div> 
            <div id = "cgvArticle12">
                <p>
                    <b>Article 12 - Propriété intellectuelle</b></br>

                    Tous les éléments du site playduh.fr sont et restent la propriété intellectuelle et exclusive de la société ORT_ELEVE. Nul n'est autorisé à reproduire, exploiter, rediffuser, ou utiliser à quelque titre que ce soit, même partiellement, des éléments du site qu'ils soient logiciels, visuels ou sonores. Tout lien simple ou par hypertexte est strictement interdit sans un accord écrit exprès de la société ORT_ELEVE.  
                </p>
            </div>
            <div id = "cgvArticle13">
                <p>
                    <b>Article 13 - Données personnelles</b></br>

                    La société ORT_ELEVE se réserve le droit de collecter les informations nominatives et les données personnelles vous concernant. Elles sont nécessaires à la gestion de votre commande, ainsi qu'à l'amélioration des services et des informations que nous vous adressons.  

                    Elles peuvent aussi être transmises aux sociétés qui contribuent à ces relations, telles que celles chargées de l'exécution des services et commandes pour leur gestion, exécution, traitement et paiement.  

                    Ces informations et données sont également conservées à des fins de sécurité, afin de respecter les obligations légales et réglementaires.  

                    Conformément à la loi du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et d'opposition aux informations nominatives et aux données personnelles vous concernant, directement sur le site Internet. 
                </p>
            </div>
            <div id = "cgvArticle14">
                <p>
                    <b>Article 14 - Archivage Preuve</b></br>

                    La société ORT_ELEVE archivera les bons de commandes et les factures sur un support fiable et durable constituant une copie fidèle conformément aux dispositions de l'article 1348 du Code civil.
                </p>
            </div>
        </div>
    </div>
        
    <?php
        // Include footer
        include('view/footer.php');
    ?>
</body>

</html>