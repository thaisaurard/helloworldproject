<?php
	class race {
		public static function list_all_races(){
			require_once('Pdo.php');
			require_once ('model/User.php');

			$idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

			$bdd=connexion();
			$reponse = $bdd->query('SELECT * FROM "Race"');
			$printed_text = "";

			// print_r($reponse);
			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{
				$printed_text = $printed_text."<br/>".$donnees["RaceName"];
			}
			return $printed_text;
		}

		public static function add_race($name, $infos, $user){
			require_once('Pdo.php');
			$bdd=connexion();
			
			$req = $bdd->prepare('INSERT INTO "Race"("RaceName", "RaceInfos", "iduser") VALUES (:RaceName,:RaceInfos,:iduser)');
			$req->bindParam(':RaceName',$name);
			$req->bindParam(':RaceInfos',$infos);
			$req->bindParam(':iduser',$user);
			$req->execute();
		}
	}
?>
