<?php 

include_once('libs.php');

//fonction pour se connecter 
function connexion($Identifiant,$Mdp)
{
	//se connecte à la base de donnée
	$bdd = db_connect();
	$reponse = $bdd->query('SELECT Identifiant, Mdp FROM Utilisateur');
	while ($donnees = $reponse->fetch())
	{
		if ($donnees['Identifiant'] == $Identifiant AND $donnees['Mdp']==$Mdp){
		return true;
		}
		
	}
}
?>