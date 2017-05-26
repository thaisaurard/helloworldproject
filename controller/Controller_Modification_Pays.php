<?php
  require_once('model/Country');
  require('Test_Connexion.php');
	onlineOnly();
  ini_set('display_errors',1);
	//$iduser = User::Get_user_Id($_COOKIE['codeconnexion']);
	$CountryName = $_POST['CountryName'];
  $CountryInfos = $_POST['CountryInfos'];
  $idWorld =

  if (empty($CountryName || empty($CountryInfos)) ) {
		$messageErreur = "Merci de renseigner tous les champs! ";
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}

	elseif (!(empty($checkCountry))){
		$messageErreur = "Il existe déjà un pays du même nom!";
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}

	else
	{
		Country::Add_Country($CountryName,$CountryInfos,$idWorld);
	}

	header("Location: ../Monde.php");
  Country::Update_Country($CountryName, $CountryInfos, $idWorld);

?>
