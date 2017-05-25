<?php
	require_once ('../model/User.php');
  require_once ('../model/Character.php');
	ini_set('display_errors',1);

	$CharacterName = htmlspecialchars($_POST['CharacterName']);
	$CharacterInfos = htmlspecialchars($_POST['CharacterInfos']);
  $CharacterAge = htmlspecialchars($_POST['CharacterAge']);
  $idRace = htmlspecialchars($_POST['race']);


  $idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

  if (empty($CharacterName || empty($CharacterInfos)) ) {
		$messageErreur = "Merci de renseigner tous les champs! ";
    header("Location: ../Erreur.php?erreur=".$messageErreur);
  }
  else
  {
    Character::add_character($CharacterName,$CharacterInfos,$idUser,$idRace);
  }

  header("Location: ../Personnages.php");
?>
