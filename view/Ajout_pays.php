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
              <div><h2 style="text-align:center;">Ajouter un Pays</h2></div>
              <div>
                <form method="post" action="controller/Controller_Ajout_Pays.php">
                  Nom du Pays:<br>
                  <input type="text" name="CountryName"><br><br>
                  Informations:<br>
                  <input type="textarea" name="CountryInfos"><br><br>
                  <button class="btn waves-effect waves-light" id="submit" value="valider">Ajouter
                  </button>
                </form>
              </div>


    </body>
</html>