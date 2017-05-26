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
        require('controller/Controller_ListePersonnages.php');

      ?>
        <div><h1 style="text-align:center;">Mes Personnages</h1></div>
        <br>
        <div class="collection">
          <ul style="margin:20px">
            <li>
              <?php
                if(empty($liste)){
                  echo "Vous n'avez créé aucun personnage";
                }
                else{
                  for($i=0;$i<count($liste);$i++){

                    $name = $liste[$i]['charactername'] . '<br />';
                    echo "<a href ='Personnage.php?charactername=".$name."'>".$name."</a>";
                  }

                }

              ?>
            </li>
          </ul>
        </div>

        <div>
          <?php
            // require_once('model/Character.php');
            // echo(character::list_all_characters());
          ?>

          <a href="Ajout_Personnage.php"> Créer un nouveau personnage </a>
        </div>

      </body>

</html>
