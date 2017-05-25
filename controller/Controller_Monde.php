<?php
	require_once('view/Monde.php');
	require_once('model/World.php');
  ini_set('display_errors',1);

	$worldname = $_GET['name'];

	$worldinfos = Get_world_infos($worldname)

?>
