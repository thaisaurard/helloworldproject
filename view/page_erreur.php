<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
        <link rel="stylesheet" href="../css/materialize/css/materialize.css">
        <style>
            body {
                background-color: white;
            }
        </style>
    </head>
    <body>
    <?php require ("header.php");
    ini_set('display_errors',1);
    ?>

		<div class="container">
			<h3>Erreur : </h3>
			<p><?php echo $messageErreur; ?></p>
		</div>
	</body>
</html>