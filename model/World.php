<?php
class World
{

  public static function Add_World($WorldName,$WorldInfos,$idUser)
	{
		require_once('Pdo.php');
		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO User(username, userpassword, usermail) VALUES (:username,:userpassword,:usermail)');
		$req->bindParam(':username',$username);
		$req->bindParam(':userpassword',$userpassword);
		$req->bindParam(':usermail',$usermail);

		$req->execute();
	}

}
