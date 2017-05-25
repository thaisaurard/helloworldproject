<?php

require_once('Pdo.php');
class Country
{

  public static function Add_Country($CountryName,$CountryInfos,$idWorld)
  {
    $bdhello=connexion();

    $req = $bdhello->prepare('INSERT INTO "Country"(Countryname, Countryinfos, idWorld) VALUES (:Countryname,:Countryinfos,:idWorld)');
    $req->bindParam(':Countryname',$Countryname);
    $req->bindParam(':Countryinfos',$Countryinfos);
    $req->bindParam(':idWorld',$idWorld);

    $req->execute();
  }

  public static function Get_world_countries($idWorld)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "Country" WHERE  idWorld = :idWorld');
    $req->bindParam(':idWorld', $idWorld);
    $req->execute();
    $data=$req->fetchAll();
    return $data;
  }

}

?>
