<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Races</title>
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

      ?>
        <div><h1 style="text-align:center;">Mes Races</h1></div>
        <div>
          <?php
            require_once('model/Race.php');
            echo(Race::list_all_races());
            ?>
            <br/>
            <a href="Ajout_Race.php"> Créer une nouvelle race </a>

        </div>

      </body>

</html>
