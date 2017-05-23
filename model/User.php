<?php
class User
{

	public static function Add_User($userName,$userPassword,$userMail)
	{
		require_once('Pdo.php');
		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO User(userName, userPassword, userMail) VALUES (:userName,:userPassword,:userMail)');
		$req->bindParam(':userName',$userName);
		$req->bindParam(':userPassword',$userPassword);
		$req->bindParam(':userMail',$userMail);

		$req->execute();
	}


	public static function Check_Password($userPassword,$userMail)
	//User_Password x User_Mail => bool
	//données : $userPassword string correspondant au mot de passe utilisateur, $userMail string correspondant au mail de l'utilisateur
	//résultat : bool vérifiant si le mot de passe entré correspond bien au mail de l'utilisateur
	{
		require_once('Pdo.php');
		$bdhello=connexion();
	   //connecté à la base de donnée

		$req = $bdhello->prepare("SELECT userPassword FROM User WHERE userMail='".$userMail."'");

		$req->execute();
		$data=$req->fetch();

		return ($data['userPassword']==$userPassword);

	}


  public static function Set_User_Coockie_Code($userMail,$userCookie)
  //User_Mail x User_Cookie_Code =>
  //données : $userMail string correspondant au mail de l'utilisateur, $userCookie string correspondant au cookie que l'on souhaite attribuer à l'utilisateur
  //résultat : modifie la base de données en attribuant un code cookie à l'utilisateur dont le mail est passé en entrée
  {
    require_once('Pdo.php');
    $bdhello=connexion();

    $req = $bdhello->prepare("UPDATE User SET UserCookie =:cookie WHERE userMail=:mail");
    $req->bindParam(':cookie',$userCookie);
    $req->bindParam(':mail',$userMail);

    $req->execute();
  }


	public static function Get_User_Id($userCookie)
	//User_Cookie_Code => User_Id
	//données : $userCookieCode string correspondant à un code cookie
	//résultat : vérifie si un code cookie existe dans la base de données, et le cas échéant renvoie un int correspondant à l'id de l'utilisateur auquel appartient le code cookie
	{
		require_once('Pdo.php');
		$bdhello=connexion();


		$req = $bdhello->prepare("SELECT idUser FROM User WHERE userCookie='".$userCookie."'");

		$req->execute();
		$data=$req->fetch();

		return $data["idUser"]; //Verifier si null
	}


	public static function Check_Mail($userMail)
	//User_Mail => [User]
	//données : string correspondant au mail à vérifier
	//résultat : vérifie si un mail existe dans la base de données, et le cas échéant renvoie un tableau contenant toutes les informations de l'utilisateur auquel est attribué le mail
	{
		require_once('Pdo.php');
		$bdhello=connexion();

		$req = $bdhello->prepare("SELECT * FROM User WHERE userMail='".$userMail."'");

		$req->execute();
		$data=$req->fetch();

		return $data;
	}


	public static function Get_User($idUser){
		require_once('Pdo.php');
		$bdhello=connexion();


		$req = $bdhello->prepare("SELECT * FROM User WHERE idUser = :idUser");
		$req->bindParam(':idUser',$idUser);

		$req->execute();
		$data=$req->fetch();

		return $data; //Verifier si null
	}
}
