<?php
	require_once ('../model/User.php');
	ini_set('display_errors',1);

	$username = htmlspecialchars($_POST['username']);
	$usermail = htmlspecialchars($_POST['usermail']);
	$userpassword = htmlspecialchars($_POST['userpassword']);
	$checkPassword = htmlspecialchars($_POST['checkPassword']);


	$mailverif=User::Check_Mail($usermail);


	if (empty($username) || empty($userpassword) || empty($checkPassword) || empty($usermail) ) {
		$messageErreur = "Merci de compléter les champs manquants ! ";

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (strlen($userpassword)<6) {
		$messageErreur = 'Votre mot de passe doit faire plus de 6 caractères';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif ($userpassword != $checkPassword) {
		$messageErreur = 'Les mots de passe saisis ne correspondent pas ! ';

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(filter_var($usermail, FILTER_VALIDATE_EMAIL))) {
		$messageErreur = "Votre email n'est pas valide  ! ";

		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	elseif (!(empty($mailverif['idUser']))) {
		$messageErreur = "Ce mail est déjà associé à un compte !";
		header("Location: ../Erreur.php?erreur=".$messageErreur);
	}
	else
	{
		$userpassword = sha1(sha1($userpassword));
		User::Add_User($username,$userpassword,$usermail);

		$cookie=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);


		setcookie('codeconnexion', $cookie, time()+(300), "/");

		User::Set_User_Coockie_Code($usermail,$cookie);

		header("Location: ../accueil2.php");
	}

?>
