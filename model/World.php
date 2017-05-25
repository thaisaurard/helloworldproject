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

  public static function Get_world_infos($worldname)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT worldinfos FROM "World" WHERE worldname = :worldname');
    $req->bindParam(':worldname', $worldname);
    $req->execute();
    $data=$req->fetch();

    return $data;
  }

  public static function Get_world_Id($worldname)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT idworld FROM "World" WHERE worldname = :worldname');
    $req->bindParam(':worldname', $worldname);
    $req->execute();
    $data=$req->fetch();
    return $data;
  }

  public static function Check_world($worldname)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "World" WHERE worldname = :worldname');
    $req->bindParam(':worldname', $worldname);
    $req->execute();
    $data=$req->fetch();
    return $data;
  }
}
