<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Monde</title>
        <link rel="stylesheet" href="css/materialize/css/materialize.css">
        <style>
        	body {
        		background-color: white;
        	}
        </style>
    </head>
    <body>
      <?php
        require('Test_Connexion.php');
        onlineOnly();
        if(isConnected()){
          require ("view/header2.php");
        }
        else{
          require ("view/header.php");
        }
        ini_set('display_errors',1);

        require_once('controller/Controller_Monde.php');

      ?>
        <div><h1 style="text-align:center;"><?php echo $worldname; ?></h1></div>

        <div>
          <p>
            <?php echo $worldinfos; ?>
          </p>

        <div>
          <?php

          //La liste des pays est ici


           ?>
        </div>


    </body>
</html>
