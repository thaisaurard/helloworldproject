<?php

  require_once('model/User.php');
  require_once('model/Character.php');

  $idUser = User::Get_user_Id($_COOKIE['codeconnexion']);

  $idCharacter = $_GET['id'];
  character::remove_character($idCharacter, $idUser);

  require_once('view/ListePersonnages.php');

?>
