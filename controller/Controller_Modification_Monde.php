<?php
	require_once ('../model/User.php');
  require_once ('../model/World.php');
	ini_set('display_errors',1);

  $oldworldname = htmlspecialchars($_POST['WorldName']);
  $WorldName = htmlspecialchars($_POST['NewWorldName']);
	$WorldInfos = htmlspecialchars($_POST['WorldInfos']);

  $idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

  $checkworld = World::Check_world($WorldName, $idUser);


	if (empty($idUser) ) {
		header("Location: ../Connexion.php");
	}
	if (empty($WorldName || empty($WorldInfos)) ) {
    header("Location: ../view/ListeMondes.php");
  }

  elseif (!(empty($checkworld))) {
    $messageErreur = "Il existe déjà un monde du même nom!";
    header("Location: ../Erreur.php?erreur=".$messageErreur);
  }
  else
  {
    World::Update_World($oldworldname,$WorldName,$WorldInfos,$idUser);
  }

  header("Location: ../ListeMondes.php");
?>
