<?php
require_once ("model/User.php");

function isConnected()
{
	if (isset($_COOKIE["codeconnexion"]))
	{

		$cookie = $_COOKIE["codeconnexion"];
		$iduser = User::Get_User_Id($cookie);
		if (empty($iduser))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{

		return false;
	}
}
//Indique si un utilisateur est connecté.

function onlineOnly()
{
	if(!isConnected())
	{
		header("Location: Connexion.php");
	}
}
//Pour les pages autorisées seulement par les utilisateurs connectés. Renvoie à la connexion sinon

if(isConnected())
{
	setcookie("codeconnexion", $_COOKIE["codeconnexion"], time()+(500), "/");
}
//L"utilisateur prouve qu"il est actif, on réinitialise la date d"expiration de son cookie

//$iduser=User::Get_user_Id($_COOKIE["codeconnexion"]);
?>
