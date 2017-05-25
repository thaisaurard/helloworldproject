<?php
	require_once('view/Monde.php');
	require_once('model/World.php');
  ini_set('display_errors',1);

	$worldname = $_GET['worldname'];
	//echo "nom:".$worldname;

	$worldinfos = World::Get_world_infos($worldname);
	//echo "infos: ".$worldinfos;
	//print_r($worldinfos);


	  require_once('model/Country.php');
	  require_once('model/World.php');

	  $idworldtab= World::Get_world_Id($worldname);
		print_r($idworldtab);
		$idworld=$idworldtab[0];

	  $liste = Country::Get_world_countries($idworld);



?>
