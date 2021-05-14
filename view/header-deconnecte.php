<body>
<header>
    <div class="header header-disable">
        <div class="titre-principale"><img class="logo" src="view/assets/img/logo-playduh.png" alt="logo de playduh">
        </div>
        <span class="hamburger-list hamburger-list-disable">
            <span class="hamburger-item hamburger-item-disable"></span>
        </span>
        <nav class="nav-list">
            <a class="nav-item" id="btnConnexion">Connexion</a>
            <a class="nav-item" id="btnInscription">Créer un compte</a>
        </nav>
    </div>
</header>
<div class="bg-log bg-log-disable">
    <div class="register inscription-disable">
        <img src="view/assets/img/times-solid.svg" class="close-register" alt="croix fermante">
        <h1 class="inscription-title">Créer un compte</h1>
        <form action="model/createClient.php" method="post" class="form-inscription">
            <input class="form-input" name="name" type="text" placeholder="Nom" required>
            <input class="form-input" name="surname" type="text" placeholder="Prénom" required>
            <input class="form-input" name="mail" type="email" placeholder="E-mail" required>
            <input class="form-input" name="password" type="password" placeholder="Mot de passe" required>
            <input class="form-input" name="livraison" type="text" placeholder="Adresse de livraison" required>
            <input class="form-input" name="facturation" type="text" placeholder="Adresse de facturation" required>
            <button class="valider-inscription" type="submit">Inscription</button>
        </form>
    </div>
    <div class="login connexion-disable">
        <img src="view/assets/img/times-solid.svg" class="close-login" alt="croix fermante">
        <h1 class="connexion-title">Connexion</h1>
        <form action="model/login.php" class="form-connexion" method="post">
            <input class="form-input" type="email" name="username" placeholder="E-mail" required>
            <input class="form-input" type="password" name="password" placeholder="Mot de passe" required>
            <button class="valider-connexion" type="submit">Connexion</button>
        </form>
    </div>
</div>