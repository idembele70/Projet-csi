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

	function FunctionName($value='')
	{
		# code...
	}
?>