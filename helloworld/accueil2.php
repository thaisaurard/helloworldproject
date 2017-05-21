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
        <div><h1 style="text-align:center;">Hello World</h1></div>
        <div>
          <ul style="text-align:center;">
				      <li><a href="Mondes.php"> Mondes </a></li>
				      <li><a href="Persos.php"> Personnages </a></li>
          </ul>
        </div>
    </body>
</html>
