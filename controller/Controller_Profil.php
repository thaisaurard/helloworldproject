<?php
require_once('view/Profil.php');
require_once('model/User.php');
$iduser = User::Get_user_Id($_COOKIE['codeconnexion']);
$user= User::Get_user($iduser);


?>
