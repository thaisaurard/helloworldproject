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
              ini_set('display_errors',1);
              require ("controller/Controller_Profil.php");
        ?>

              <div>
          			<ul>
          			    <li><h4 style="text-align:center;">Profil</h4></li>
          			    <li><?php // echo $info['userName'] ?></li>
          			    <li><?php // echo $info['userMail'] ?></li>
          			</ul>
          		</div>
          		<a href="Modification_profil.php" class="waves-effect waves-light btn">Modifier le profil</a>

      </body>
</html>
