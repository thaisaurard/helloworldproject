<?php
class World
{

  public static function Add_World($WorldName,$WorldInfos,$idUser)
	{
		require_once('Pdo.php');
		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO User(userName, userPassword, userMail) VALUES (:userName,:userPassword,:userMail)');
		$req->bindParam(':userName',$userName);
		$req->bindParam(':userPassword',$userPassword);
		$req->bindParam(':userMail',$userMail);

		$req->execute();
	}

}
