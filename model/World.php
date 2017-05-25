<?php
require_once('Pdo.php');
class World
{

  public static function Add_World($worldname,$worldinfos,$iduser)
	{
		$bdhello=connexion();

		$req = $bdhello->prepare('INSERT INTO "World"(worldname, worldinfos, iduser) VALUES (:worldname,:worldinfos,:iduser)');
		$req->bindParam(':worldname',$worldname);
		$req->bindParam(':worldinfos',$worldinfos);
		$req->bindParam(':iduser',$iduser);

		$req->execute();
	}


  public static function Get_user_worlds($iduser)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "World" AS "w" WHERE  w."iduser" = :iduser');
    $req->bindParam(':iduser', $iduser);
    $req->execute();
    $data=$req->fetchAll();

    return $data;
  }

}
