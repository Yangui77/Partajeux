<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/libs.php');


//fonction qui afficher les joueurs qui ont nos jeux voulu et qui veulent nos jeux possédés
function array_jeux_voulu($idUtilisateur){

	$bdd = db_connect();
	  $req = $bdd->prepare('SELECT idJeux FROM JeuxVoulu WHERE idUtilisateur = :idUtilisateur');
	  $req->execute(array('idUtilisateur' => $idUtilisateur));
	  return $req;

	  }
	  
//fonction qui affiche les joueurs qui ont nos jeux voulu
function joueur_possede_jeux_voulu($idUtilisateur){
	$bdd = db_connect();
	$var= array_jeux_voulu($idUtilisateur);
	while($id_jeux_voulu = $var->fetch()){
	  $jeux = $id_jeux_voulu['idJeux'];
	  $req = $bdd->prepare('SELECT idUtilisateur FROM PossedeJeux WHERE idJeux = :idJeux ');
	  $req->execute(array('idJeux' => $jeux));
	  return $req;
	}
}
function joueur_potentiel_echange($req){
	$bdd = db_connect();


}

?>
