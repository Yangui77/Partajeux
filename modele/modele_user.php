<?php
include_once('libs.php');

//retourne un array avec les jeux de l'utilisateur avec en parametre son id
function jeux($id, $table){
	$bdd = db_connect();
	if($table == 'PossedeJeux'){
		$reponse = $bdd->prepare('SELECT NomJeux,Description,Année, idJeux FROM Jeux NATURAL JOIN PossedeJeux WHERE PossedeJeux.idUtilisateur = :id Group by NomJeux');
	}
	elseif($table == 'JeuxVoulu'){

		$reponse = $bdd->prepare('SELECT NomJeux,Description,Année, idJeux FROM Jeux NATURAL JOIN JeuxVoulu WHERE JeuxVoulu.idUtilisateur = :id Group by NomJeux');
	}
    $reponse->execute(array('id' => $id));
	$result = $reponse->fetchAll();
	return $result;
    }
function get_console_jeux($idUtilisateur,$idJeux, $table){

	$bdd = db_connect();
	if($table == 'PossedeJeux'){
		$reponse = $bdd->prepare('SELECT NomConsole FROM PossedeJeux NATURAL JOIN Console WHERE idUtilisateur = :idUtilisateur AND idJeux = :idJeux');
	}
	elseif($table == 'JeuxVoulu'){

	$reponse = $bdd->prepare('SELECT NomConsole FROM JeuxVoulu NATURAL JOIN Console WHERE idUtilisateur = :idUtilisateur AND idJeux = :idJeux');
	}
    $reponse->execute(array('idJeux' => $idJeux , 'idUtilisateur' => $idUtilisateur));
	$result = $reponse->fetchAll();
	return $result;
}