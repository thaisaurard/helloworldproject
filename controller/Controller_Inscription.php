<?php
	require_once ('../model/User.php');
	ini_set('display_errors',1);

	$userName = htmlspecialchars($_POST['userName']);
	$userMail = htmlspecialchars($_POST['userMail']);
	$userPassword = htmlspecialchars($_POST['userPassword']);
	$checkPassword = htmlspecialchars($_POST['checkPassword']);


	$mailverif=User::Check_Mail($userMail);


	if (empty($userName) || empty($userPassword) || empty($checkPassword) || empty($userMail) ) {
		$messageErreur = "Merci de compléter les champs manquants ! ";

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (strlen($userPassword)<6) {
		$messageErreur = 'Votre mot de passe doit faire plus de 6 caractères';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif ($userPassword != $checkPassword) {
		$messageErreur = 'Les mots de passe saisis ne correspondent pas ! ';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(filter_var($userMail, FILTER_VALIDATE_EMAIL))) {
		$messageErreur = "Votre email n'est pas valide  ! ";

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(empty($mailverif['idUser']))) {
		$messageErreur = "Ce mail est déjà associé à un compte !";
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		$userPassword = sha1(sha1($userPassword));
		User::Add_User($userName,$userPassword,$userMail);

		$cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);


		setcookie('codeconnexion', $cookie, time()+(300), "/");

		User::Set_User_Coockie_Code($userMail,$cookie);

		header("Location: ../accueil2.php");
	}

?>
