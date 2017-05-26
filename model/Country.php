<?php

require_once('Pdo.php');
class Country
{

  public static function Add_Country($CountryName,$CountryInfos,$idworld)
  {
    $bdhello=connexion();

    $req = $bdhello->prepare('INSERT INTO "Country"("CountryName", "CountryInfos", "idworld") VALUES (:Countryname,:Countryinfos,:idworld)');
    $req->bindParam(':Countryname',$CountryName);
    $req->bindParam(':Countryinfos',$CountryInfos);
    $req->bindParam(':idworld',$idworld);

    $req->execute();
  }

  public static function Get_world_countries($idworld)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "Country" WHERE  idworld=:idworld');
    $req->bindParam(':idworld', $idworld);
    $req->execute();
    $data=$req->fetchAll();
    return $data;
  }

  public static function Check_Country($CountryName, $idworld)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "Country" WHERE "CountryName" = :CountryName AND idworld= :idworld');
    $req->bindParam(':CountryName', $CountryName);
    $req->bindParam(':idworld', $idworld);
    //$req->execute(array($CountryName, $idworld));
    $data=$req->fetch();
    return $data;
  }

  public static function Set_Capital($CityName)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('INSERT INTO "Country"("Capital") VALUES (:CityName)');
    $req->bindParam(':CityName',$CityName);

    $req->execute();
  }


}

?>
