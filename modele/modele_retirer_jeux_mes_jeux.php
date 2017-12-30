<?php
include_once('libs.php');

//retire le jeux de ses jeux 
function retirer_jeux_mes_jeux($idUtilisateur,$idJeux,$table){
	$bdd = db_connect();
   //Préparation de la requete 
	if ($table == 'PossedeJeux'){
   	$req = $bdd->prepare('DELETE FROM PossedeJeux WHERE idJeux = :idJeux AND idUtilisateur = :idUtilisateur');
	}

	elseif ($table == 'JeuxVoulu'){
	$req = $bdd->prepare('DELETE FROM JeuxVoulu WHERE idJeux = :idJeux AND idUtilisateur = :idUtilisateur');
	}

    //éxécution de la requete
    $req->execute(array('idUtilisateur' => $idUtilisateur,'idJeux' => $idJeux));
    $req->closeCursor();
    
    echo "jeux retiré";
}
 ?>
