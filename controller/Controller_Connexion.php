<?php
require_once ("../model/User.php");


$mdp = htmlspecialchars($_POST["userpassword"]);
$mail = htmlspecialchars($_POST["usermail"]);


if (empty($mdp) || empty($mail)) {
	$messageErreur = "Merci de completer les champs manquants ! ";

	header("Location: ../Erreur.php?erreur=".$messageErreur);
}
elseif (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
	$messageErreur = "Votre email n'est pas valide  ! ";

	header("Location: ../Erreur.php?erreur=".$messageErreur);
}
else
{
	$mdp = sha1(sha1(htmlspecialchars($mdp)));
	if(User::Check_Password($mdp,$mail))
	{
		$cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);

		setcookie("codeconnexion", $cookie, time()+(500), "/");

		User::Set_User_Coockie_Code($mail,$cookie);
		header("Location: ../accueil2.php");
	}
	else
	{
		$messageErreur = "Email ou mot de passe erroné ";

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
}
?>
