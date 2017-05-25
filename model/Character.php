<?php
	class character {
		public static function list_all_characters(){
			require_once('Pdo.php');
			require_once ('model/User.php');

			$idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

			$bdd=connexion();
			$reponse = $bdd->query('SELECT * FROM character');
			$printed_text = "";


			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{
				if ($donnees['idUser'] == $idUser){
			    	$printed_text = $printed_text."<li>#".$donnees['idCharacter']." : ".$donnees['charactername']."</li>";
				}
			}
			return $printed_text;
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
