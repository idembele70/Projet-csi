<?php

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
        $message.= "<td><p style='font-size:15px; color:#90c9e0; margin:10px'></p></td>";
        $message.= "</tr>";
        $message.= "<tr>";
        $message.= "<td><p style='margin:10px; font-size:10px; color:#90c9e0'>&copy; Playduh</p></td>";
        $message.= "</tr></table>";

		$requete = "UPDATE client set
					motDePasse = '',
					token = '$token'";
		mail($adresseMail, 'Demande de contact', $message);

	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
}
echo 'contact';
