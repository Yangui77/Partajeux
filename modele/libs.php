<?php

//se connecter à la base de donnée
function db_connect()
{
    try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=Partajeux;charset=utf8', 'root', 'root');
    	return $bdd;
	}
	
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
}


function get_id($Identifiant){
	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT idUtilisateur FROM Utilisateur WHERE Identifiant = :Identifiant');
	$reponse->execute(array('Identifiant' => $Identifiant));
	
	while($donnees = $reponse->fetch())
	{
		return $donnees['idUtilisateur'];
	}
	
}


?>