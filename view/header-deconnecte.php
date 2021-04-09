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
            <form action="" method="post" class="form-inscription">
                <input class="form-input" type="text" placeholder="Nom">
                <input class="form-input" type="text" placeholder="E-mail">
                <input class="form-input" type="text" placeholder="Mot de passe">
                <input class="form-input" type="text" placeholder="Adresse de facturation">
                <button class="valider-inscription" type="submit">Inscription</button>
            </form>
        </div>
        <div class="login connexion-disable">
            <img src="view/assets/img/times-solid.svg" class="close-login" alt="croix fermante">
            <h1 class="connexion-title">Connexion</h1>
            <form action="model/login.php" class="form-connexion" method="post">
                <input class="form-input" type="text" name="username" placeholder="E-mail">
                <input class="form-input" type="text" name="password" placeholder="Mot de passe">
                <button class="valider-connexion" type="submit">Connexion</button>
            </form>
        </div>
    </div>