<?php 
include_once('libs.php');



function recherche_jeux($search){

	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT NomJeux FROM Jeux WHERE NomJeux LIKE ? ');
	$reponse->execute(array($search.'%'));
	$result = $reponse->fetchAll();
	return $result;
}




?>