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
        <?php require ("view/header2.php");?>
        <?php require ("controller/Controller_ListeMonde.php");?>
        <div><h1 style="text-align:center;">Mes Mondes</h1></div>
        <div>
        <?php

        echo

          $liste['worldname'];

        ?>
         <li><a href="Ajout_Monde.php"> Ajouter un monde </a></li>
        </div>


    </body>
</html>
