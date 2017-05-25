<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Personnages</title>
        <link rel="stylesheet" href="css/materialize/css/materialize.css">
        <style>
        	body {
        		background-color: white;
        	}
        </style>
    </head>
    <body>
        <?php require("header2.php");?>
        <div><h1 style="text-align:center;">Mes Personnages</h1></div>
        <div>
          <?php
            require_once(__DIR__."/../model/Character.php");
            echo(Character::list_all_characters());
          ?>
        </div>

      </body>

</html>
