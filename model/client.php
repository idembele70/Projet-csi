<?php 

	include 'dbConfig.php';

	// Création d'un client
	function createClient($nom, $prenom, $adresseMail, $motDePasse, $adresseLivraison, $adresseFacturation) {
		try {
			global $pdo;
			// Hashage du mot de passe
			$motDePasse = hash("sha256", $motDePasse);
			// Prepare the request
			$sql = "INSERT INTO client (nom, prenom, adresseMail, password, adresseLivraison, adresseFacturation) 
					VALUES (:nom, :prenom, :adresseMail, :motDePasse, :adresseLivraison, :adresseFacturation)";
			// Target to send
			$modele = $pdo->prepare($sql);
			// Bind Value
			$modele->bindParam('nom', $nom, PDO::PARAM_STR);
			$modele->bindParam('prenom', $prenom, PDO::PARAM_STR);
			$modele->bindParam('adresseMail', $adresseMail, PDO::PARAM_STR);
			$modele->bindParam('motDePasse', $motDePasse, PDO::PARAM_STR);
			$modele->bindParam('adresseLivraison', $adresseLivraison, PDO::PARAM_STR);
			$modele->bindParam('adresseFacturation', $adresseFacturation, PDO::PARAM_STR);
			// Send the request
			$modele->execute();
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Connexion client
	function verifClient($adresseMail, $motDePasse) { //En paramètre les données récupérées du formulaire de connexion
		try{
			global $pdo;
			$adresseMail = (string) $adresseMail;
			$motDePasse = (string) hash("sha256", $motDePasse);
			// Request to send
			$requete = "SELECT idClient, adresseMail, password from client where adresseMail = :adresseMail and `password` = :motDePasse";
			// Target to send
			$modele = $pdo->prepare($requete);
			// Bind Value
			$modele->bindParam('adresseMail', $adresseMail, PDO::PARAM_STR);
			$modele->bindParam('motDePasse', $motDePasse, PDO::PARAM_STR);
			// Send the request
			$modele->execute();
			// Formatting the datas for analogy
			$tab_compte = $modele->fetch(PDO::FETCH_ASSOC);
			// Test if it's client
			if (!empty($tab_compte)) {
				// is client
				$_SESSION['id'] = (int) $tab_compte['idClient'];
				$_SESSION['mail'] = (string) $tab_compte['adresseMail'];
				$_SESSION['connected'] = (bool) true;
			}
		}
		catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }

	}

	// Déconnexion client
	function verifClientId($id) {
		try{
			global $pdo;
			$requete = "UPDATE client set 
						isConnected = 0,
						where id = '$id' ";
			$stmt = $pdo->query($requete);

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
			global $pdo;
			$requete = "UPDATE client set 
						adresseMail = '$adresseMail',
						where id = '$id' ";
			$stmt = $pdo->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Get the data of the client
	function renderPerso(int $persoAct) {

		global $pdo;
		$viewPerso = [];

		$query = (string) "SELECT * FROM client WHERE idClient = :persoAct";

		try {
			// Target to send
			$modele = $pdo->prepare($query);
			// Bind Value
			$modele->bindParam('persoAct', $persoAct, PDO::PARAM_INT);
			// Send the request
			$modele->execute();
			// Formatting the datas for analogy
			$tab_client = $modele->fetch(PDO::FETCH_ASSOC);			
		} 
		catch(Exception $erreur) {
			exit('Problème de connexion à la DB.'.$erreur);
		}

		// Test the presence
		if (!empty($tab_client)) {
			$viewPerso = array(
				'id' => $tab_client['idClient'],
				'nom' => $tab_client['nom'], 
				'prénom' => $tab_client['prenom'], 
				'mail' => $tab_client['adresseMail'], 
				'livraison' => $tab_client['adresseLivraison'], 
				'facturation' => $tab_client['adresseFacturation']
			);
		}

		return $viewPerso;

	}


?>