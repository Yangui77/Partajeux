<?php
include_once('libs.php');

//retourne un array avec les jeux de l'utilisateur avec en parametre son id
function jeux($id){
	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT NomJeux,Description,Année,Console FROM Jeux JOIN PossedeJeux
	 WHERE Jeux.idJeux = PossedeJeux.idJeux AND PossedeJeux.idUtilisateur = :id');
    $reponse->execute(array('id' => $id));
	$result = $reponse->fetchAll();
	return $result;
    }

function get_id_jeux($NomJeux){
	
	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT idJeux FROM Jeux WHERE NomJeux = :NomJeux');
    $reponse->execute(array('NomJeux' => $NomJeux));

	$donnees = $reponse->fetch();
	echo $donnees['idJeux'];

}