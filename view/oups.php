<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Erreur</title>
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
        if(isConnected()){
          require ("view/header2.php");
        }
        else{
          require ("view/header.php");
        }
        ini_set('display_errors',1);

      ?>


		<div class="container">
			<h3>Oups!</h3>
      <p>Cette page n'est pas encore disponible!</p>
		</div>
    <?php require ("view/footer.php");?>
	</body>
</html>
