<?php

//se connecter à la base de donnée
function db_connect()
{
    try
	{	
    	$bdd = new PDO('mysql:host=localhost;dbname=Partajeux;charset=utf8', 'root', '');
    	return $bdd;
	}
	
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
}

//renvoie l'id de l'utilisateur avec en paramètre son pseudo
function get_id($Identifiant){
	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT idUtilisateur FROM Utilisateur WHERE Identifiant = :Identifiant');
	$reponse->execute(array('Identifiant' => $Identifiant));
	
	while($donnees = $reponse->fetch())
	{
		return $donnees['idUtilisateur'];
	}
	
}
//renvoie l'id du jeux avec en paramètre le nom du jeux
function get_id_jeux($NomJeux){

	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT idJeux FROM Jeux WHERE NomJeux = :NomJeux');
    $reponse->execute(array('NomJeux' => $NomJeux));

	$donnees = $reponse->fetch();
	echo $donnees['idJeux'];

}




?>