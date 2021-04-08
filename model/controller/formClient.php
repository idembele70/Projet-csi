<?php 
	require_once 'vendor/autoload.php';
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
?>