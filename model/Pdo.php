<?php
function connexion()
{
	/*
	try
	{
		$helloworld = new PDO('jdbc:postgresql://ec2-79-125-2-69.eu-west-1.compute.amazonaws.com:5432/d6uglu0a0256pu', 'gsaxotpwcvhylr', 'de2da0e9577d8c347037e742eb4f4454968aadf4cda13cf88ef92ff2a5c56293');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($helloworld);
}
*/

try
{
	// On se connecte à Heroku
	$DSN='pgsql:host=ec2-79-125-2-69.eu-west-1.compute.amazonaws.com;dbname=d6uglu0a0256pu';
	$login='gsaxotpwcvhylr';
	$mdp='de2da0e9577d8c347037e742eb4f4454968aadf4cda13cf88ef92ff2a5c56293';
	$helloworld = new PDO($DSN,$login,$mdp);
	$helloworld->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
    die('Error while connecting database : '.$e->getMessage());
}
	return($helloworld);
}

?>
