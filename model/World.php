<?php
require_once('Pdo.php');
class World
{

  public static function Add_World($WorldName,$WorldInfos,$idUser)
	{
		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO "user"(username, userpassword, usermail) VALUES (:username,:userpassword,:usermail)');
		$req->bindParam(':username',$username);
		$req->bindParam(':userpassword',$userpassword);
		$req->bindParam(':usermail',$usermail);

		$req->execute();
	}


  public static function Get_user_worlds($idUser)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "World" AS "w" WHERE  w."idUser" = :idUser');
    $req->bindParam(':idUser', $idUser);
    $req->execute();
    $data=$req->fetchAll();

    return $data;
  }

}
