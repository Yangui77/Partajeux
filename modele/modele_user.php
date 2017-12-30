<?php
include_once('libs.php');

//retourne un array avec les jeux de l'utilisateur avec en parametre son id
function jeux($id, $table){
	$bdd = db_connect();
	if($table == 'PossedeJeux'){
		$reponse = $bdd->prepare('SELECT NomJeux,Description,Année, idJeux FROM Jeux NATURAL JOIN PossedeJeux WHERE PossedeJeux.idUtilisateur = :id');
	}
	elseif($table == 'JeuxVoulu'){

		$reponse = $bdd->prepare('SELECT NomJeux,Description,Année, idJeux FROM Jeux NATURAL JOIN JeuxVoulu WHERE JeuxVoulu.idUtilisateur = :id');
	}
    $reponse->execute(array('id' => $id));
	$result = $reponse->fetchAll();
	return $result;
    }
