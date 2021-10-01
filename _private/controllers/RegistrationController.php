<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegistrationController {

	public function registationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('registreren');

	}

	public function handleRegistrationForm(){
		

		$errors = [];

		
		$email		= filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
		$wachtwoord = trim( $_POST['wachtwoord'] );

		if ($email === false ) {
			$errors['email'] = 'Geen geldig email adres ingevuld';

		}

		if ( strlen( $wachtwoord ) <6 ) {
			$errors['wachtwoord'] = 'Geen geldig wachtwoord (Mininmaal 6 tekens';

		}
		
		if ( count( $errors ) === 0 ) {
			//opslaan gebruiker

			//checken  of gebruiker al bestaat
			$connection = dbConnect();
			$sql		= "SELECT * FROM `gebruikers` WHERE `email` = :email";
			$statement 	= $connection->prepare( $sql );
			$statement->execute( [ 'email' => $email ]);


			if ( $statement->rowCount() === 0 ) {
				// verder met opslaan
				$sql		   = "INSERT INTO `gebruiker` (`email`, `wachtwoord`) VALUEs (:email, wachtwoord)";
				$statement 	   = $connection-prepare( $sql ); 
				$safe_password = password_hash( $wachtwoord, PASSWORD_DEFAULT);
				$params		   = [
					'email'		=> $email,
					'wachtwoord'=> $safe_password
				];
				$statement->execute( $params );
				echo "Klaar!";
				exit;

			
		
			
			} else {
				$errors['email'] = 'Dit account bestaat al';
			}
			//Als die er niet is, dan verder met opslaan
			//anders foutmelding
		}

		
	}
	

}

