<?php
  require_once('model/User.php');
  require_once('model/World.php');
//  $usercookie = $_COOKIE['codeconnexion'];
  $idUser = 5;
  //User::Get_user_Id($_COOKIE['codeconnexion']);

  $liste = World::Get_user_worlds($idUser);
  //if (empty($liste)){
print_r($liste);
  //}


?>
