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
        // require_once('Test_Connexion.php');
        // onlineOnly();
        // if(isConnected()){
          require_once ("view/header2.php");
        // }
        // else{
        //   require_once ("view/header.php");
        // }
        ini_set('display_errors',1);

        require('controller/Controller_Monde.php');

        ?>
        <div><h1 style="text-align:center;"><?php echo $_GET['worldname']; ?></h1></div>
        <div style="margin:20px"><h5>Informations sur ce monde</h5></div>
        <div>
          <p style="margin:20px">
            <?php

            if (count($worldinfos)==0){
              echo "Pas d'informations sur ce monde";
            }
            else{
              print($worldinfos[0][0]);
            }

            ?>
          </p>

        <div>
          <?php

            if(empty($list)){
              echo "Vous n'avez créé aucun pays pour ce monde";
            }
            else{
              for($i=0;$i<count($liste);$i++){

                $CountryName = $liste[$i]['CountryName'] . '<br />';
                echo "<a href ='Pays.php?CountryName=".$CountryName."'>".$CountryName."</a>";
                //echo $link;
                }

              }

           ?>
        </div>
        <div>
          <?php
            echo "<a href='Ajout_Pays.php?idworld=$idworld'> Ajouter un pays </a>";
          ?>
        </div>
        <div>
          <?php
            echo "<a href='Suppression_Monde.php?idworld=$idworld'> Supprimer ce monde </a>";
          ?>
        </div>

    </body>
</html>
