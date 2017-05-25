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

      ?>
        <div><h1 style="text-align:center;">Mes Personnages</h1></div>
        <div>
          <?php
            require('PDO.php');
            $bdd=connexion();
            $reponse = $bdd->query('SELECT * FROM character');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch())
            {
            ?>
                <p style="margin:10px"> <?php echo $donnees['charactername']; ?></br></p>
            <?php
            }

            ?>
        </div>

      </body>

</html>
