<?php

  require_once('model/User.php');
  require_once('model/Character.php');
  require_once('view/ListePersonnages.php');
//  $usercookie = $_COOKIE['codeconnexion'];
  $idUser = User::Get_user_Id($_COOKIE['codeconnexion']);

  $liste = character::Get_user_characters($idUser);


?>
