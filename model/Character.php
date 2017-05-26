<?php
require_once('Pdo.php');
	class character
{

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

		public static function Get_user_characters($iduser)
		{
			$bdhello=connexion();
			$req = $bdhello->prepare('SELECT * FROM "character" WHERE  "idUser" = :idUser');
			$req->bindParam(':idUser', $iduser);
			$req->execute();
			$data=$req->fetchAll();

			return $data;
		}

		public static function Get_character_infos($charactername, $iduser)
		{
			$bdhello=connexion();

			$charactername = str_replace("<br />", "", $charactername);
			$charactername = str_replace("<br/>", "", $charactername);

			$req = $bdhello->prepare('SELECT "CharacterInfos" FROM "character" WHERE charactername = :charactername AND "idUser"=:iduser');
			$req->bindParam(':charactername', $charactername);
			$req->bindParam(':iduser', $iduser);
			$req->execute();
			$data=$req->fetchAll();
			return $data;
		}

		public static function Get_character_data($charactername, $iduser)
		{
			$bdhello=connexion();

			$charactername = str_replace("<br />", "", $charactername);
			$charactername = str_replace("<br/>", "", $charactername);

			$req = $bdhello->prepare('SELECT * FROM "character" WHERE charactername = :charactername AND "idUser"=:iduser');
			$req->bindParam(':charactername', $charactername);
			$req->bindParam(':iduser', $iduser);
			$req->execute();
			$data=$req->fetchAll();
			return $data;
		}

		public static function Check_character($charactername, $iduser)
		{
			$bdhello=connexion();
	    $req = $bdhello->prepare('SELECT * FROM "character" WHERE charactername = :charactername AND "idUser" = :iduser');
	    $req->bindParam(':charactername', $charactername);
	    $req->bindParam(':iduser', $iduser);
	    $req->execute();
	    $data=$req->fetch();
	    return $data;
		}


		public static function list_all_characters(){
			require_once('Pdo.php');
			require_once ('model/User.php');
			require_once ('model/Race.php');

			$idUser = User::Get_user_Id($_COOKIE["codeconnexion"]);

			$bdd=connexion();
			$reponse = $bdd->query('SELECT * FROM character');
			$printed_text = "";


			// On affiche chaque entrée une à une
			while ($donnees = $reponse->fetch())
			{
				if ($donnees['idUser'] == $idUser){
					$race = Race::get_race_name($donnees['idRace']);
			    	$printed_text = $printed_text."<li>".$donnees['charactername']." (".$race.") : ".$donnees['CharacterInfos']."</li>";
				}
			}
			return $printed_text;
		}

	}
?>
