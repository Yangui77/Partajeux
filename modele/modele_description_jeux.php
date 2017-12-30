<?php
include_once('libs.php');

//retourne un array avec les jeux de l'utilisateur avec en parametre son id
function info_jeux($NomJeux){
	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT NomJeux,Description,Année,idJeux FROM Jeux WHERE Nomjeux = :NomJ ');
    $reponse->execute(array('NomJ' => $NomJeux));
	$result = $reponse->fetchAll();
	return $result;
    }



