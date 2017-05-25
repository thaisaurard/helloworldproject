<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
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
        <div><h1 style="text-align:center;">Hello World</h1></div>
        <div>
          <ul style="text-align:center;">
				      <h3><a href="ListeMondes.php"> Mondes </a></h3>
				      <h3><a href="Personnages.php"> Personnages </a></h3>
          </ul>
        </div>
    <div>
        <?php //echo ?>
    </div>
    </body>
</html>
