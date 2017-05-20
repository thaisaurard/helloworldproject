<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
        <link rel="stylesheet" href="css/materialize/css/materialize.css">
    </head>
    <body>
        <?php require ("view/header.php");?>
        <h1>Ma page web</h1>
        <a style="text-align:center;" class="waves-effect waves-light btn-large">Button</a>
        <a class="col s12 m6 center-align button2">Buuutton</a>
        
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    </body>
</html>