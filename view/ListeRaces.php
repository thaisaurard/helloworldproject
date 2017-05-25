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
        <div><h1 style="text-align:center;">Mes Races</h1></div>
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
