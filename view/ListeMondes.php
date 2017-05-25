<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mondes</title>
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
        <?php

        require ("controller/Controller_ListeMonde.php");?>
        <div><h1 style="text-align:center;">Mes Mondes</h1></div>
        <div>
          <ul>
            <li>
              <?php
                if(empty($liste)){
                  echo "Vous n'avez créé aucun monde";
                }
                else{
              	echo $liste['worldname'] . '<br />';
                }

              ?>
            </li>
          </ul>
        </div>
        <div>
          <li><a href="Ajout_Monde.php"> Ajouter un monde </a></li>
        </div>


    </body>
</html>
