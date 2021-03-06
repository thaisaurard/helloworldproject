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

  public static function Get_world_infos($worldname, $iduser)
  {
    $bdhello=connexion();

    $worldname = str_replace("<br />", "", $worldname);
    $worldname = str_replace("<br/>", "", $worldname);
    //$req = $bdhello->prepare('SELECT worldinfos FROM "World" WHERE worldname = :worldname');
    $req = $bdhello->prepare('SELECT worldinfos FROM "World" WHERE worldname = :worldname AND iduser=:iduser');
    $req->bindParam(':worldname', $worldname);
    $req->bindParam(':iduser', $iduser);
    $req->execute();
    $data=$req->fetchAll();
    return $data;
  }

  public static function Get_world_Id($worldname, $iduser)
  {
    $worldname = str_replace("<br />", "", $worldname);
    $worldname = str_replace("<br/>", "", $worldname);
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT idworld FROM "World" WHERE worldname = :worldname AND iduser=:iduser');
    $req->bindParam(':worldname', $worldname);
        $req->bindParam(':iduser', $iduser);
    $req->execute();
    $data=$req->fetch();
    return $data[0];
  }

  public static function Check_world($worldname, $iduser)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "World" WHERE worldname = :worldname AND iduser = :iduser');
    $req->bindParam(':worldname', $worldname);
    $req->bindParam(':iduser', $iduser);
    $req->execute();
    $data=$req->fetch();
    return $data;
  }

  public static function Delete_World($idworld)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('DELETE FROM "World" WHERE idworld = ?');
    $req->execute(array($idworld));

  }

  public static function Update_World($oldworldname,$worldname,$worldinfos,$iduser)
  {
    $bdhello=connexion();

    $req = $bdhello->prepare('UPDATE "World" SET worldname = :worldname, worldinfos = :worldinfos WHERE iduser=:iduser AND worldname=:oldworldname');
    $req->bindParam(':worldname',$worldname);
    $req->bindParam(':oldworldname',$oldworldname);
    $req->bindParam(':worldinfos',$worldinfos);
    $req->bindParam(':iduser',$iduser);

    $req->execute();

  }

}
