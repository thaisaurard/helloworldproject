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
				if ($idUser == $donnees['iduser']){
					$printed_text = $printed_text."<br/>".$donnees["RaceName"];
				}
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

		public static function dropdown_race(){
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
				if ($idUser == $donnees['iduser']){
					$item = "<option value=".$donnees['idrace'].">".$donnees['RaceName']."</option>";
					$printed_text = $printed_text.$item;
				}
			}
			return $printed_text;
		}

		public static function get_race_name($id){
			require_once('Pdo.php');
			$bdd=connexion();

			$reponse = $bdd->query('SELECT * FROM "Race" WHERE "idrace" = '.$id);
			while ($donnees = $reponse->fetch()){
				return $donnees['RaceName'];
			}
			return "Race inconnue";
		}
	}
?>
