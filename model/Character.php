<?php
	class character {
		public static function list_all_characters(){
			require_once('Pdo.php');
			$bdd=connexion();
			$reponse = $bdd->query('SELECT * FROM character');
			$text = "";
			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{
			    $text = $text."<li>#".$donnees['idCharacter']." : ".$donnees['charactername']."</li>";
			}
			return $text;
		}
	}
?>
