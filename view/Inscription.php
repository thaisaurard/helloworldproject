<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription</title>
        <link rel="stylesheet" href="../css/materialize/css/materialize.css">
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
      <div><h4 style="text-align:center;">Inscription</h4></div>

      <div>
        <form method="post" action="../controller/Controller_Inscription.php">
          Nom d'utilisateur:<br>
          <input type="text" name="username"><br>
          Adresse email:<br>
          <input type="text" name="usermail"><br>
          Mot de passe:<br>
          <input type="password" name="userpassword"><br>
          Vérification du mot de passe:<br>
          <input type="password" name="checkPassword"><br>
          <button class="btn waves-effect waves-light" id="submit" value="valider">Inscription
          </button>
        </form>
      </div>
      <?php var_dump($_POST); ?>
    </body>
</html>
