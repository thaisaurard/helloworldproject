<?php
  require_once('model/User.php');
  require_once('model/World.php');
//  $usercookie = $_COOKIE['codeconnexion'];
  $idUser = User::Get_user_Id($_COOKIE['codeconnexion']);

  $liste = World::Get_user_worlds($idUser);









?>
