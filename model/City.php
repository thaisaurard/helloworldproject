<?php

require_once('Pdo.php');
class City
{

  public static function Add_City($CityName,$CityInfos,$idCountry)
  {
    $bdhello=connexion();

    $req = $bdhello->prepare('INSERT INTO "City"("CityName", "CityInfos", "idCountry") VALUES (:Cityname,:Cityinfos,:idCountry)');
    $req->bindParam(':Cityname',$CityName);
    $req->bindParam(':Cityinfos',$CityInfos);
    $req->bindParam(':idCountry',$idCountry);

    $req->execute();
  }

  public static function Get_Country_countries($idCountry)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "City" WHERE  "idCountry" = :idCountry');
    $req->bindParam(':idCountry', $idCountry);
    $req->execute();
    $data=$req->fetchAll();
    return $data;
  }

  public static function Check_City($CityName, $idCountry)
  {
    $bdhello=connexion();
    $req = $bdhello->prepare('SELECT * FROM "City" WHERE "CityName" = :CityName AND "idCountry" = :idCountry');
    $req->bindParam(':CityName', $CityName);
    $req->bindParam(':idCountry', $idCountry);
    //$req->execute(array($CityName, $idCountry));
    $data=$req->fetch();
    return $data;
  }

}

?>
