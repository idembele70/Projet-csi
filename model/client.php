<?php 
	// Pour avoir accès aux données générées automatiquement par faker
	require_once 'vendor/autoload.php';

	$faker = Faker\Factory::create();

	for ($i = 0; $i < 10; $i++) {
		$faker->lastName;
  		$faker->firstName;
  		$faker->address;
	}
	// Connexion à la BDD
// Faire des tests sur la connexion / déconnexion /!\
 

	// Commexion à la BDD
	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "";
			$pdo = new PDO('mysql:host=localhost;dbname=playduh', $user, $pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	// Création d'un client
	function createClient($nom, $prenom, $adresseMail, $motDePasse, $adresseLivraison, $adresseFacturation) {
		try {
			$con = getDatabaseConnexion();
			$motDePasse =  hash("sha256", $this->motDePasse);
			$sql = "INSERT INTO client (nom, prenom, adresseMail, motDePasse, adresseLivraison, adresseFacturation) 
					VALUES ('$nom', '$prenom', '$adresseMail', '$motDePasse', '$adresseLivraison', '$adresseFacturation')";
	    	$con->exec($sql);
	    	session_start();
			$_SESSION['mail'] = $adresseMail;
			$_SESSION['mdp'] = $motDePasse
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Connexion client
	function verifClient($id, $adresseMail, $motDePasse) { //En paramètre les données récupérées du formulaire de connexion
		try{
			$con = getDatabaseConnexion();
			$motDePasse =  hash("sha256", $this->motDePasse);
			$requete = "SELECT * from utilisateurs where adresseMail = '$adresseMail' and motDePasse = '$motDePasse'";
			session_start();
			$_SESSION['mail'] = $adresseMail;
			$_SESSION['mdp'] = $motDePasse
		}
		catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }

	}

	// Déconnexion client
	function verifClient($id) {
		try{
			$con = getDatabaseConnexion();
			$requete = "UPDATE client set 
						isConnected = 0,
						where id = '$id' ";
			$stmt = $con->query($requete);

			//Fermeture de la session et des variables qui lui sont associées
			session_destroy();
			unset($_SESSION['id']);
			unset($_SESSION['mail']);
			unset($_SESSION['mdp']);
		}
		catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }

	}

	// Mise à jour des infos du client (email)
	function updateClient($adresseMail) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE client set 
						adresseMail = '$adresseMail',
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Vide le champ mot de passe pour être remplacé
	// Lors de l'envoi d'un mail, le mail doit contenir un en-tête From --> additional_params dans le php.ini pour ne pas avoir d'erreurs 
	// Voir PHPMailer
	function updateMotDePasse($adresseMail, $motDePasse, $token){
		try{
			$token = bin2hex(random_bytes(12));
			$con = getDatabaseConnexion();
			$motDePasse =  hash("sha256", $this->motDePasse);
			$message= "<table style='border-radius:15px; border: 3px solid #6247c2; text-align:center; padding:20px; font-family:roboto; background-color:#ecf3e5'>";
	        $message.= "<tr>";
	        $message.= "<td><img src='logo.png' alt='logo-playduh' style='width:50px'></td>";
	        $message.= "</tr>";
	        $message.= "<tr>";
	        $message.= "<td><h1 style='font-size:25px; color:#90c9e0;margin:10px'>Votre demande a bien été reçue</h1></td>";
	        $message.= "</tr>";
	        $message.= "<tr>";
	        $message.= "<td><p style='font-size:15px; color:#90c9e0; margin:10px'>Cliquez sur ce <a href="'#'">lien</a> pour réinitialiser votre mot de passe</p></td>";
	        $message.= "</tr>";
	        $message.= "<tr>";
	        $message.= "<td><p style='margin:10px; font-size:10px; color:#90c9e0'>&copy; Playduh</p></td>";
	        $message.= "</tr></table>";

			$requete = "UPDATE client set
						motDePasse = '',
						token = '$token'"
			$stmt = $con->query($requete);
			mail($adresseMail, 'Réinitialisation du mot de passe', $message);

		}catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	//Mise en place du nouveau mot de passe
	function replaceMotDePasse($motDePasse)
	{
		try{
			$requete = "UPDATE client set
			motDePasse = '$motDePasse',
			token = ''"
		}catch(PDOException $e){
			echo $sql . "<br>" . $e->getMessage();
		}
	}
?>