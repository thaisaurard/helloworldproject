<?php
require_once ("../model/User.php");


$userpassword = htmlspecialchars($_POST["userpassword"]);
$username = htmlspecialchars($_POST["username"]);


if (empty($userpassword) || empty($username)) {
	$messageErreur = "Merci de completer les champs manquants ! ";

	header("Location: ../Erreur.php?erreur=".$messageErreur);
}

else
{
	$userpassword = sha1(sha1(htmlspecialchars($userpassword)));
	if(User::Check_Password($userpassword,$username))
	{
		$cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);

		setcookie("codeconnexion", $cookie, time()+(500), "/");

		User::Set_User_Coockie_Code($username,$cookie);
		header("Location: ../accueil2.php");
	}
	else
	{
		$messageErreur = "Email ou mot de passe erroné ";

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
}
?>
