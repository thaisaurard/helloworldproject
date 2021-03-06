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

        <?php
            require_once("model/Character.php");
            $characterdata = character::Get_character_data($charactername, $idUser);
        ?>

        <div style="margin:20px"><h5>Race</h5></div>
        <div>
          <p style="margin:20px">
            <?php
            require_once("model/Race.php");
            $race_txt = race::get_race_name($characterdata["idRace"]);
            print($race_txt);
            // print_r($characterdata);
            ?>
          </p>
        </div>

        <div style="margin:20px"><h5>Informations sur ce personnage</h5></div>
        <div>
          <p style="margin:20px">
            <?php
            if (count($characterinfos)==0){
              echo "Pas d'informations sur ce personnage";
            }
            else{
              print($characterdata["CharacterInfos"]);
            }

            ?>
          </p>
        </div>
        <br/>
        <div>
          <p style="margin:20px">
            <?php
            $id = $characterdata["idCharacter"];
            $remove_link = "<a href='Suppression_Personnage.php?id=".$id."'>Supprimer le personnage</a>";
            echo $remove_link;
            ?>
          </p>
        </div>


      <?php require ("view/footer.php");?>
    </body>
</html>
