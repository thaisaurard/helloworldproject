<?php
class user
{

	public static function Add_user($username,$userpassword,$usermail)
	{
		require_once('Pdo.php');
		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO user(username, usermail, userpassword) VALUES (:username,:usermail,:userpassword)');
		/* $req->bindParam(':username',$username);
		$req->bindParam(':userpassword',$userpassword);
		$req->bindParam(':usermail',$usermail);
		*/

		$req->execute(array(
		'username' => $username,
		'usermail' => $usermail,
		'userpassword' => $userpassword
		));
	}


	public static function Check_Password($userpassword,$usermail)
	//user_Password x user_Mail => bool
	//données : $userpassword string correspondant au mot de passe utilisateur, $usermail string correspondant au mail de l'utilisateur
	//résultat : bool vérifiant si le mot de passe entré correspond bien au mail de l'utilisateur
	{
		require_once('Pdo.php');
		$bdhello=connexion();
	   //connecté à la base de donnée

		$req = $bdhello->prepare("SELECT userpassword FROM user WHERE usermail='".$usermail."'");

		$req->execute();
		$data=$req->fetch();

		return ($data['userpassword']==$userpassword);

	}


  public static function Set_user_Coockie_Code($usermail,$usercookie)
  //user_Mail x user_Cookie_Code =>
  //données : $usermail string correspondant au mail de l'utilisateur, $usercookie string correspondant au cookie que l'on souhaite attribuer à l'utilisateur
  //résultat : modifie la base de données en attribuant un code cookie à l'utilisateur dont le mail est passé en entrée
  {
    require_once('Pdo.php');
    $bdhello=connexion();

    $req = $bdhello->prepare("UPDATE user SET usercookie =:usercookie WHERE usermail=:usermail");
    $req->bindParam(':usercookie',$usercookie);
    $req->bindParam(':usermail',$usermail);

    $req->execute();
  }


	public static function Get_user_Id($usercookie)
	//user_Cookie_Code => user_Id
	//données : $usercookieCode string correspondant à un code cookie
	//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
	{
		require_once('Pdo.php');
		$bdhello=connexion();


		$req = $bdhello->prepare("SELECT idUser FROM user WHERE usercookie='".$usercookie."'");

		$req->execute();
		$data=$req->fetch();

		return $data["idUser"]; //Verifier si null
	}


	public static function Check_Mail($usermail)
	//user_Mail => [user]
	//données : string correspondant au mail à vérifier
	//résultat : vérifie si un mail existe dans la base de données, et le cas échéant renvoie un tableau contenant toutes les informations de l'utilisateur auquel est attribué le mail
	{
		require_once('Pdo.php');
		$bdhello=connexion();

		$req = $bdhello->prepare("SELECT * FROM user WHERE usermail = :usermail");

		$req->execute(array(":usermail" => $usermail));
		$data=$req->fetch();

		return $data;
	}


	public static function Get_user($idUser){
		require_once('Pdo.php');
		$bdhello=connexion();


		$req = $bdhello->prepare("SELECT * FROM user WHERE idUser = :idUser");
		$req->bindParam(':idUser',$idUser);

		$req->execute();
		$data=$req->fetch();

		return $data; //Verifier si null
	}
}
