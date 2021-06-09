<?php 

	include 'dbConfig.php';
	// Création d'une commande
	function createCommand(int $nameId, array $data) {
		try {

			global $pdo;
			// Get the last command
			$lastIntCommand = renderLastCommand() + 1; 
			$lastStringCommand = 'Facture'.strval($lastIntCommand);
			
			// Table Commande
			$sqlCommand = (string) "INSERT INTO commande (ref, dateCreation, idClient) 
					VALUES (:lastStringCommand, NOW(), :nameId)";
			$modele = $pdo->prepare($sqlCommand);
			// Bind Value
			$modele->bindParam('lastStringCommand', $lastStringCommand, PDO::PARAM_STR);
			$modele->bindParam('nameId', $nameId, PDO::PARAM_INT);
			// Send the request
			$modele->execute();
			
			// Table contenir
			$sqlContenir = (string) "INSERT INTO contenir (idCommande, idProduit, nbreProduit) VALUES";
			// Variable to manage the comma
			$lap = (int) 1;
			// Loop to manage the number of item
			foreach ($data as $key => $value) {
				// If not the first, add comma
				if ($lap != 1) {
					$sqlContenir .= ',';
				}
				// Inject data.
				$keySplit = preg_split("/fimo/", $key);
				$sqlContenir .= '('.$lastIntCommand.', '.$keySplit[1].', '.$value.')';
				// Add a loop
				$lap = $lap + 1;
			}
			$sqlContenir .= ';';
			$pdo->exec($sqlContenir);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}


	function renderCommand(int $idClient) {

		global $pdo;
		$viewCommand =  [];
	
		$query = (string) "SELECT * FROM commande WHERE idClient = $idClient";
	
		try {
			$result_command = $pdo->query($query);
			$tab_command = $result_command->fetchAll(PDO::FETCH_ASSOC);
		} catch(Exception $erreur) {
			exit('Problème de connexion à la DB.'.$erreur);
		}
	
		foreach ($tab_command as $row) {
			$viewCommand = array(
				'idCommande' => $row['idCommande'],
				'ref' => $row['ref'], 
				'dateCreation' => $row['dateCreation'], 
				'idClient' => $row['idClient']
			);
		}
	
		return $viewCommand;
	
	}

	function renderLastCommand() {

		global $pdo;
	
		$lastCommand = (integer) "";
		$query = (string) "SELECT MAX(idCommande) as max FROM commande";
	
		try {
			$resultCommand = $pdo->query($query);
        	$lastCommand = $resultCommand->fetch(PDO::FETCH_ASSOC);
		} catch(Exception $erreur) {
			exit('Problème de connexion à la DB.'.$erreur);
		}
		return $lastCommand['max'];
	
	}
	
	

	
	
