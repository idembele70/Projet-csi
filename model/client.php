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
			$modele->bindParam('nom', $nom);
			$modele->bindParam('prenom', $prenom);
			$modele->bindParam('adresseMail', $adresseMail);
			$modele->bindParam('motDePasse', $motDePasse);
			$modele->bindParam('adresseLivraison', $adresseLivraison);
			$modele->bindParam('adresseFacturation', $adresseFacturation);
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
			$requete = "SELECT idClient, adresseMail, password from client where adresseMail = '$adresseMail' and `password` = '$motDePasse'";
			$resultat_compte = $pdo->query($requete);
			// Formatting the datas for analogy
			$tab_compte = $resultat_compte->fetchAll(PDO::FETCH_ASSOC);
			// DB's deconnection
			if (isset($con)) {
				unset($con);
			}
			// Test if it's client
			if (!empty($tab_compte)) {
				// is client
				$_SESSION['id'] = (int) $tab_compte[0]['idClient'];
				$_SESSION['mail'] = (string) $tab_compte[0]['adresseMail'];
				$_SESSION['password'] = (string) $tab_compte[0]['password'];
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

	function renderPerso(int $persoAct) {

		global $pdo;
		$viewPerso = [];

		$query = (string) "SELECT * FROM client WHERE idClient = $persoAct";

		try {
			$result_client = $pdo->query($query);
			$tab_client = $result_client->fetchAll(PDO::FETCH_ASSOC);
		} catch(Exception $erreur) {
			exit('Problème de connexion à la DB.'.$erreur);
		}

		foreach ($tab_client as $row) {
			$viewPerso = array(
				'id' => $row['idClient'],
				'nom' => $row['nom'], 
				'prénom' => $row['prenom'], 
				'mail' => $row['adresseMail'], 
				'livraison' => $row['adresseLivraison'], 
				'facturation' => $row['adresseFacturation']
			);
		}

		return $viewPerso;

	}


?>