<?php 
include_once('libs.php');

//fonction pour se connecter 
function connexion($Identifiant,$Mdp)
{
	//se connecte à la base de donnée
	$bdd = db_connect();
	//On parcourt tous les utilisateurs
	$reponse = $bdd->query('SELECT Identifiant, Mdp FROM Utilisateur');
	while ($donnees = $reponse->fetch())
	{
		//on regarde si nos identifiants sont dans la base de donnée
		if ($donnees['Identifiant'] == $Identifiant AND $donnees['Mdp']==$Mdp)
		{
			//si oui on renvoie vrai
		return true;
		}
		
	}
}


?>