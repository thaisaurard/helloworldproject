<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajout Monde</title>
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
            <div><h2 style="text-align:center;">Ajouter un monde</h2></div>
            <div>
              <form method="post" action="controller/Controller_Ajout_Monde.php">
                Nom du Monde:<br>
                <input type="text" name="WorldName"><br><br>
                Informations:<br>
                <input type="textarea" name="WorldInfos"><br><br>
                <button class="btn waves-effect waves-light" id="submit" value="valider">Ajouter
                </button>
              </form>
            </div>


      <?php require ("view/footer.php");?>
    </body>
</html>
