<?php
  require_once('view/Personnage.php');
  require_once('model/User.php');
  require_once('model/Character.php');
  ini_set('display_errors',1);

  $charactername = $_GET['charactername'];
  //echo "nom:".$charactername;
  $idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

  $characterinfos = character::Get_character_infos($charactername, $idUser);
?>
