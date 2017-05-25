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
        <?php require ("view/header2.php");
            //  require ("testconnexion.php");
              ini_set('display_errors',1);
        ?>

        <div><h2 style="text-align:center;">Ajouter un personnage</h2></div>
        <div>
          <form method="post" action="controller/Controller_Ajout_Perso.php">
            Nom :<br>
            <input type="text" name="CharacterName"><br><br>
            Age :<br>
            <input type="text" name="CharacterAge"><br><br>
            Informations :<br>
            <input type="textarea" name="CharacterInfos"><br><br>
            <button class="btn waves-effect waves-light" id="submit" value="valider">Ajouter
            </button>
          </form>
        </div>

    </body>
</html>
