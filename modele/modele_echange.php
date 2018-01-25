<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/libs.php');


//fonction qui affiche nos jeux voulu
function array_jeux_voulu($idUtilisateur){

	$bdd = db_connect();
	  $req = $bdd->prepare('SELECT idJeux,idConsole FROM JeuxVoulu WHERE idUtilisateur = :idUtilisateur');
	  $req->execute(array('idUtilisateur' => $idUtilisateur));
	  $jeu_voulu = $req->fetchALL();
	 return $jeu_voulu;

	  }
	  //fonction qui affiche les jeux possédé de l'utilisateur
function array_jeux_possede($idUtilisateur){

	$bdd = db_connect();
	  $req = $bdd->prepare('SELECT idJeux,idConsole FROM PossedeJeux WHERE idUtilisateur = :idUtilisateur');
	  $req->execute(array('idUtilisateur' => $idUtilisateur));
	  $jeu_possede = $req->fetchALL();
	 return $jeu_possede;

	  }
	  
//fonction qui affiche les joueurs qui ont nos jeux voulu
function joueur_possede_jeux_voulu($idUtilisateur){
	$bdd = db_connect();
	  $req = $bdd->prepare('SELECT DISTINCT PossedeJeux.idUtilisateur FROM PossedeJeux,JeuxVoulu WHERE PossedeJeux.idJeux = JeuxVoulu.idJeux AND JeuxVoulu.idUtilisateur = :idUtilisateur' );
	  $req->execute(array('idUtilisateur' => $idUtilisateur));
	  $reponse = $req->fetchALL();
	  
	  	return $reponse;
	  
	
}


//fonction qui affiche les jeux echangeable
function afficher_jeux_voulu_echange($idUtilisateur1,$idUtilisateur2){
$bdd = db_connect();
	  $req = $bdd->prepare('SELECT Distinct PossedeJeux.idJeux, PossedeJeux.idConsole FROM PossedeJeux,JeuxVoulu WHERE PossedeJeux.idJeux = JeuxVoulu.idJeux AND JeuxVoulu.idUtilisateur = :idUtilisateur1 AND PossedeJeux.idUtilisateur = :idUtilisateur2');
	  $req->execute(array('idUtilisateur1' => $idUtilisateur1, 'idUtilisateur2'=> $idUtilisateur2));
	  $jeu_voulu = $req->fetchALL();
	 return $jeu_voulu;
}


?>
