<?php
  require_once('model/World.php')

  $idworld = $_GET['idworld'];

  World::Delete_World($idworld);
  header("Location: ../ListeMondes.php");


?>
