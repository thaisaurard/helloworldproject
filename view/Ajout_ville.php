<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajout Ville</title>
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
        <div><h2 style="text-align:center;">Ajouter une ville</h2></div>
        <div>
          <form method="post" action="controller/Controller_Ajout_Ville.php">
            Nom de la ville:<br>
            <input type="text" name="CityName"><br><br>
            Informations:<br>
            <input type="textarea" name="CityInfos"><br><br>
            <button class="btn waves-effect waves-light" id="submit" value="valider">Ajouter
            </button>
          </form>
        </div>
    <?php require ("view/footer.php");?>
    </body>
</html>
