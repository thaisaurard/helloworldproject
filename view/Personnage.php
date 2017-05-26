<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Personnage</title>
        <link rel="stylesheet" href="css/materialize/css/materialize.css">
        <style>
        	body {
        		background-color: white;
        	}
        </style>
    </head>
    <body>
      <?php
        // require_once('Test_Connexion.php');
        // onlineOnly();
        // if(isConnected()){
          require_once ("view/header2.php");
        // }
        // else{
        //   require_once ("view/header.php");
        // }
        ini_set('display_errors',1);

        require('controller/Controller_Personnage.php');

        ?>
        <div><h1 style="text-align:center;"><?php echo $_GET['charactername']; ?></h1></div>
        <div style="margin:20px"><h5>Informations sur ce personnage</h5></div>
        <div>
          <p style="margin:20px">
            <?php

            if (count($characterinfos)==0){
              echo "Pas d'informations sur ce personnage";
            }
            else{
              print($characterinfos[0][0]);
            }

            ?>
          </p>


    </body>
</html>
