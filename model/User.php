<?php
require_once('Pdo.php');

class user
{

	public static function Add_user($username,$userpassword,$usermail)
	{

		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO "user"(username,usermail,userpassword) VALUES (:username,:usermail,:userpassword)');
		// $req = $bdhello->prepare('SELECT * FROM "user"');

		$req->execute(array(
		':username' => $username,
		':userpassword' => $userpassword,
		':usermail' => $usermail
		));
	}


	public static function Check_Password($userpassword,$username)

	{
		require_once('Pdo.php');
		$bdhello=connexion();
	   //connecté à la base de donnée

		$req = $bdhello->prepare('SELECT userpassword FROM "user" WHERE username= :username');
		$req->bindParam(':username',$username);

		$req->execute();
		$data=$req->fetch();

		return ($data['userpassword']==$userpassword);

	}


  public static function Set_user_Coockie_Code($username,$usercookie)

  {
    $bdhello=connexion();

    $req = $bdhello->prepare('UPDATE "user" SET usercookie=:usercookie WHERE username=:username');
    $req->bindParam(':usercookie',$usercookie);
    $req->bindParam(':username',$username);
		echo "username".$username;
    $req->execute();
  }


	public static function Get_user_Id($usercookie)

	{
		require_once('Pdo.php');
		$bdhello=connexion();

		// echo "variable usercookie : ".$usercookie;

		$req = $bdhello->prepare('SELECT iduser FROM "user" WHERE usercookie=:usercookie');
		$req->bindParam(':usercookie',$usercookie);
		$req->execute();
		$data=$req->fetch();


		return $data["iduser"]; //Verifier si null
	}


	public static function Check_Mail($usermail){

	//résultat : vérifie si un mail existe dans la base de données

	//  WHERE usermail = :usermai array(":usermail" => $usermail)

		$bdhello=connexion();

		$req = $bdhello->prepare('SELECT * FROM "user" WHERE usermail = :usermail');

		$req->execute(array(":usermail" => $usermail));
		$data=$req->fetch();

		return $data;
	}


	public static function Get_user($idUser){
		require_once('Pdo.php');
		$bdhello=connexion();


		$req = $bdhello->prepare('SELECT * FROM "user" WHERE idUser = :idUser');
		$req->bindParam(':idUser',$idUser);

		$req->execute();
		$data=$req->fetch();

		return $data; //Verifier si null
	}
}
