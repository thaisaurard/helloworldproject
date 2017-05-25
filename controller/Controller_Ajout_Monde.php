<?php
	require_once ('../model/User.php');
  require_once ('../model/World.php');
	ini_set('display_errors',1);

	$WorldName = htmlspecialchars($_POST['WorldName']);
	$WorldInfos = htmlspecialchars($_POST['WorldInfos']);

  $idUser = User::Get_User_Id($_COOKIE["codeconnexion"]);

  if (empty($WorldName || empty($WorldInfos)) ) {
		$messageErreur = "Merci de renseigner tous les champs! ";
    header("Location: ../Erreur.php?erreur=".$messageErreur);
  }
  else
  {
    World::Add_World($WorldName,$WorldInfos,$idUser);
  }

?>
