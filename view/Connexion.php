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
      <?php require ("header.php");
          //  require ("testconnexion.php");
            ini_set('display_errors',1);
      ?>
      <div><h2 style="text-align:center;">Hello World</h2></div>
      <div><h4 style="text-align:center;">Connexion</h4></div>
      <div>
        <form action="../controller/Controller_Connexion.php" method="post">
          Nom d'utilisateur:<br>
          <input type="text" name="userName"><br>
          Mot de passe:<br>
          <input type="password" name="userPassword"><br>
          <input type="submit" value="Submit">
        </form>
      </div>
    </body>
</html>
