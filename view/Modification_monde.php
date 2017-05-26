<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modification Monde</title>
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

          <div><h2 style="text-align:center;"><?php echo "Modifier ".$_GET['worldname'] ?></h2></div>

          <div>
            <form method="post" action="controller/Controller_Modification_Monde.php">
              <input type="hidden" name="WorldName" >
              Nom du monde:<br>
              <input type="text" name="NewWorldName" ><br><br>
              <p style="color:black">
                <input type="textarea" name="WorldInfos" ><br><br>
              </p>
              <button class="btn waves-effect waves-light" id="submit" value="valider">Modifier
              </button>
            </form>
          </div>


    </body>
</html>
