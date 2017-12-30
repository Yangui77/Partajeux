<?php 
include_once('libs.php');
function ajout_jeux($idUtilisateur,$idJeux,$table)
{   //se connecter à la base de donnée
   $bdd = db_connect();
   if ($table == 'PossedeJeux'){
   //Préparation de la requete 
     $req = $bdd->prepare('INSERT INTO PossedeJeux VALUES(:idJeux,:idUtilisateur)');
     }

   elseif ($table == 'JeuxVoulu') {
      $req = $bdd->prepare('INSERT INTO JeuxVoulu VALUES(:idUtilisateur,:idJeux)');
      }

    
    $req->execute(array('idJeux' => $idJeux, 'idUtilisateur' => $idUtilisateur));
    $req->closeCursor();
    
   
}


function possede_jeux($idUtilisateur,$idJeux,$table){

$bdd = db_connect();

// Récupération de tous les jeux de l'utilisateur
if($table == 'PossedeJeux'){

  $reponse = $bdd->prepare('SELECT idJeux FROM PossedeJeux WHERE idUtilisateur = :idUtilisateur');
  }

  elseif ($table == 'JeuxVoulu') {
    $reponse = $bdd->prepare('SELECT idJeux FROM JeuxVoulu WHERE idUtilisateur = :idUtilisateur');
    }

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