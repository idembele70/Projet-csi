<?php 
	// Pour avoir accès aux données générées automatiquement par faker
	require_once 'vendor/autoload.php';

	$faker = Faker\Factory::create();

	for ($i = 0; $i < 10; $i++) {
		$faker->lastName;
  		$faker->firstName;
  		$faker->address;
	}

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
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Vérification des identifiants lors de la connexion
	function verifClient($adresseMail, $motDePasse) { //En paramètre les données récupérées du formulaire de connexion
		try{
			$con = getDatabaseConnexion();
			$motDePasse =  hash("sha256", $this->motDePasse);
			$requete = "SELECT * from utilisateurs where adresseMail = '$adresseMail' and motDePasse = '$motDePasse'";		
		}
		catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }

	}

	// Mise à jour des infos du client (email)
	function updateClient($adresseMail) {
		try {
			$con = getDatabaseConnexion();
			$motDePasse =  hash("sha256", $this->motDePasse);
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
	function updateMotDePasse($adresseMail, $motDePasse, $token){
		try{
			$token = bin2hex(random_bytes(12))
			$con = getDatabaseConnexion();
			$motDePasse =  hash("sha256", $this->motDePasse)
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