<?php 

	include 'dbConfig.php';

	// Création d'un client
	function createClient($nom, $prenom, $adresseMail, $motDePasse, $adresseLivraison, $adresseFacturation) {
		try {
			global $pdo;
			var_dump('okok');
			$motDePasse = hash("sha256", $motDePasse);
			$sql = "INSERT INTO client (nom, prenom, adresseMail, password, adresseLivraison, adresseFacturation) 
					VALUES ('$nom', '$prenom', '$adresseMail', '$motDePasse', '$adresseLivraison', '$adresseFacturation')";
	    	$pdo->exec($sql);

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

	// Vide le champ mot de passe pour être remplacé
	// Lors de l'envoi d'un mail, le mail doit contenir un en-tête From --> additional_params dans le php.ini pour ne pas avoir d'erreurs 
	// Voir PHPMailer
	// function updateMotDePasse($adresseMail, $motDePasse, $token){
	// 	try{
	// 		$token = bin2hex(random_bytes(12));
	// 		$con = getDatabaseConnexion();
	// 		$motDePasse =  hash("sha256", $this->motDePasse);
	// 		$message= "<table style='border-radius:15px; border: 3px solid #6247c2; text-align:center; padding:20px; font-family:roboto; background-color:#ecf3e5'>";
	//         $message.= "<tr>";
	//         $message.= "<td><img src='logo.png' alt='logo-playduh' style='width:50px'></td>";
	//         $message.= "</tr>";
	//         $message.= "<tr>";
	//         $message.= "<td><h1 style='font-size:25px; color:#90c9e0;margin:10px'>Votre demande a bien été reçue</h1></td>";
	//         $message.= "</tr>";
	//         $message.= "<tr>";
	//         $message.= "<td><p style='font-size:15px; color:#90c9e0; margin:10px'>Cliquez sur ce <a>lien</a> pour réinitialiser votre mot de passe</p></td>";
	//         $message.= "</tr>";
	//         $message.= "<tr>";
	//         $message.= "<td><p style='margin:10px; font-size:10px; color:#90c9e0'>&copy; Playduh</p></td>";
	//         $message.= "</tr></table>";

	// 		$requete = "UPDATE client set
	// 					motDePasse = '',
	// 					token = '$token'"
	// 		$stmt = $con->query($requete);
	// 		mail($adresseMail, 'Réinitialisation du mot de passe', $message);

	// 	}catch(PDOException $e){
	// 		echo $sql . "<br>" . $e->getMessage();
	// 	}
	// }

	// //Mise en place du nouveau mot de passe
	// function replaceMotDePasse($motDePasse)
	// {
	// 	try{
	// 		$requete = "UPDATE client set
	// 		motDePasse = '$motDePasse',
	// 		token = ''"
	// 	}catch(PDOException $e){
	// 		echo $sql . "<br>" . $e->getMessage();
	// 	}
	// }

?>