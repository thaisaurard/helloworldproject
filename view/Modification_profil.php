<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modifier Profil</title>
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
        <div>
        <h3 style="text-align:center;"> Modifier mon profil </h3>
        </div>
        <div>
          <form method="post" action="controller/Controller_Modification_Profil.php">
            Nom d'utilisateur:<br>
            <input type="text" name="username"><br>
            Adresse email:<br>
            <input type="text" name="usermail"><br>
            <button class="btn waves-effect waves-light" id="submit" value="valider">Inscription
            </button>
          </form>
        </div>


    </body>
</html>
