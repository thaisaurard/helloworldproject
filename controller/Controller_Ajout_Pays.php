<?php
	//require_once('../view/Monde.php');
	require_once('../model/Country.php');
  ini_set('display_errors',1);

	$idWorld = $_GET['idworld'];

	$CountryName = htmlspecialchars($_POST['CountryName']);
	$CountryInfos = htmlspecialchars($_POST['CountryInfos']);

	$checkCountry = Country::Check_Country($CountryName, $idWorld);

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
	?>
