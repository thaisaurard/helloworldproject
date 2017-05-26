<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Pays</title>
        <link rel="stylesheet" href="css/materialize/css/materialize.css">
        <style>
        	body {
        		background-color: white;
        	}
        </style>
    </head>
    <body>
        <?php require ("view/header2.php");?>
        <div><h1 style="text-align:center;"><?php echo $CountryName ?></h1></div>

        <div>
          <p>
            <?php echo $CountryInfos ?>
          </p>
        <div>
        <div>
          <?php
            echo "<a href='Modification_Pays.php?countryname=$CountryName&countryinfos=$CountryInfos'> Modifier les informations </a>";
          ?>
        </div>




          <?php

          //La liste des villes est ici

           ?>
        </div>

      <?php require ("view/footer.php");?>
    </body>
</html>
