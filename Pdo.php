<?php
function connexion()
{
	try
	{
		$projetweb = new PDO('heroku pg:psql postgresql-reticulated-76244 --app helloworldproject');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	return($helloworld);
}
?>