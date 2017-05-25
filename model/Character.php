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

		public static function add_character($name, $infos, $user, $race){
			require_once('Pdo.php');
			$bdd=connexion();
			
			$req = $bdd->prepare('INSERT INTO character("charactername", "CharacterInfos", "idRace", "idUser") VALUES (:charactername,:CharacterInfos,:idRace,:idUser)');
			$req->bindParam(':charactername',$name);
			$req->bindParam(':CharacterInfos',$infos);
			$req->bindParam(':idUser',$user);
			$req->bindParam(':idRace',$race);

			$req->execute();
		}
	}
?>
