<?php
	require_once ('../model/User.php');
  require_once ('../model/Race.php');
	ini_set('display_errors',1);

	$Name = htmlspecialchars($_POST['Name']);
	$Infos = htmlspecialchars($_POST['Infos']);

  $idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

  if (empty($Name || empty($Infos)) ) {
		$messageErreur = "Merci de renseigner tous les champs! ";
    header("Location: ../Erreur.php?erreur=".$messageErreur);
  }
  else
  {
    Race::add_race($Name,$Infos,$idUser);
  }

  header("Location: ../Races.php");
?>
