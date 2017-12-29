<?php 
include_once('libs.php');
function ajout_jeux($idUtilisateur,$idJeux)
{   //se connecter à la base de donnée
   $bdd = db_connect();

   //Préparation de la requete 
   $req = $bdd->prepare('INSERT INTO PossedeJeux( idJeux, idUtilisateur) VALUES(:idJeux,:idUtilisateur)');
    //éxécution de la requete
    $req->execute(array('idJeux' => $idJeux, 'idUtilisateur' => $idUtilisateur));
    $req->closeCursor();
   
}

function possede_jeux($idUtilisateur,$idJeux){

$bdd = db_connect();

// Récupération de tous les jeux de l'utilisateur
$reponse = $bdd->prepare('SELECT idJeux FROM PossedeJeux WHERE idUtilisateur = :idUtilisateur');
$reponse->execute(array('idUtilisateur' => $idUtilisateur));
//on compare tous les jeux avec le parametre $Identifiant
while ($donnees = $reponse->fetch()){
   		if ($donnees[idJeux] == $idJeux)
   		{  
   	    return true;
      
   		}
   	
	}
}
?>