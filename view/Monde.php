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
        // require_once('model/World.php');
        // require_once('model/User.php');
        ini_set('display_errors',1);

        require('controller/Controller_Monde.php');
         //$worldname=$_GET['worldname'];
        // $iduser = User::Get_user_Id($_COOKIE['codeconnexion']);
        // $idworld= World::Get_world_Id($worldname, $iduser);
        // $worldinfos = World::Get_world_infos($worldname, $iduser);
        ?>
        <div><h1 style="text-align:center;"><?php echo $_GET['worldname']; ?></h1></div>
        <div style="margin:20px"><h5>Informations sur ce monde</h5></div>
        <div>
          <p style="margin:20px">
            <?php

            if (empty($worldinfos)){
              echo "Pas d'informations sur ce monde";
            }
            else{
              print($worldinfos[0][0]);
            }

            ?>
          </p><br><br>


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
        </div><br><br>
        <div>

    <ul class="collection">
      <li>
        <div>
          <?php
            //echo "<a href='Ajout_Pays.php?idworld=".$idworld."'> Ajouter un pays </a>";
          ?>
        </div>
      </li>
      <li>
        <div>
          <?php
            $worldname=$_GET['worldname'];
            echo "<a href='Modification_Monde.php?worldname=".$worldname."&worldinfos=".$worldinfos[0][0]."'> Modifier les informations </a>";
          ?>
        </div>
      </li>
      <li>
        <div>
          <?php
            echo "<a href='Suppression_Monde.php?idworld=".$idworld."'> Supprimer ce monde </a>";
          ?>
        </div>
      </li>
      </ul>
    </div>
      <?php require ("view/footer.php");?>
    </body>
</html>
