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
        onlineOnly();
        if(isConnected()){
          require ("view/header2.php");
        }
        else{
          require ("view/header.php");
        }
        ini_set('display_errors',1);

      ?>
    ?>

		<div class="container">
			<h3>Erreur : </h3><p><?php echo $messageErreur; ?></p>
		</div>
	</body>
</html>
