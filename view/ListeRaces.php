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
        <?php require("header2.php");?>
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
