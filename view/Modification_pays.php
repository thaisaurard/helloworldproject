<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modification Pays</title>
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
        <?php
            echo "<div><h2 style="text-align:center;">Modifier $_GET['countryname']</h2></div>"
        ?>
            <div>
              <form method="post" action="controller/Controller_Modification_Pays.php">
                Nom du Pays:<br>
                <?php "<input type="text" name="CountryName" value=.$_GET['countryname'].>"?><br><br>
                Informations:<br>
                <?php "<input type="textarea" name="CountryInfos" value=.$_GET['countryinfos'].><br><br>"?>
                <button class="btn waves-effect waves-light" id="submit" value="valider">Modifier
                </button>
              </form>
            </div>


      <?php require ("view/footer.php");?>
    </body>
</html>
