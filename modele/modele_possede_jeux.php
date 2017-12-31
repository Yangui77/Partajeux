<?php 
include_once('libs.php');
//fonction qui ajoute le jeux en fonction de l'id de l'utilisateur et de l'id du Jeux, $table pour savoir si le jeux est voulu ou possédé
function ajout_jeux($idUtilisateur,$idJeux,$idConsole,$table)
{   //se connecter à la base de donnée
   $bdd = db_connect();
   if ($table == 'PossedeJeux'){
   //Préparation de la requete 
     $req = $bdd->prepare('INSERT INTO PossedeJeux(idJeux,idUtilisateur,idConsole) VALUES(:idJeux,:idUtilisateur,:idConsole)');
     }

   elseif ($table == 'JeuxVoulu') {

      $req = $bdd->prepare('INSERT INTO JeuxVoulu(idJeux,idUtilisateur,idConsole) VALUES(:idJeux,:idUtilisateur,:idConsole)');
      }

    
    $req->execute(array('idJeux' => $idJeux, 'idUtilisateur' => $idUtilisateur,'idConsole'=>$idConsole));
    $req->closeCursor();
    
   
}

//fonction qui retourne true si le jeux est déjà possédé ou voulu 
function possede_jeux($idUtilisateur,$idJeux,$idConsole,$table){

$bdd = db_connect();

// Récupération de tous les jeux de l'utilisateur
if($table == 'PossedeJeux'){

  $reponse = $bdd->prepare('SELECT idJeux, idConsole FROM PossedeJeux WHERE idUtilisateur = :idUtilisateur');
  }

  elseif ($table == 'JeuxVoulu') {

  $reponse = $bdd->prepare('SELECT idJeux, idConsole FROM JeuxVoulu WHERE idUtilisateur = :idUtilisateur');
  }

$reponse->execute(array('idUtilisateur' => $idUtilisateur));
//on compare tous les jeux avec le parametre $Identifiant
while ($donnees = $reponse->fetch()){
   		if ($donnees[idJeux] == $idJeux && $donnees[idConsole] == $idConsole )
   		{  
   	    return true;
      
   		}
   	
	}
}


//retourne la console du jeux 
function get_console_id($NomConsole){
  $bdd = db_connect();
  $reponse = $bdd->prepare('SELECT idConsole FROM Console WHERE NomConsole = :NomConsole');
  $reponse->execute(array('NomConsole' => $NomConsole));
  $donnees = $reponse->fetch();
  return $donnees;
  }






?>