<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/libs.php');

//ajouter un membre à la base de donnée
function ajout_membre($NomUtilisateur,$Email,$Mdp,$Identifiant)
{   //se connecter à la base de donnée
  
   $bdd = db_connect();
   //Préparation de la requete 
   $req = $bdd->prepare('INSERT INTO Utilisateur(NomUtilisateur, Email, Mdp, Identifiant) VALUES(:NomUtilisateur,:Email, :Mdp, :Identifiant)');
    
    //éxécution de la requete
    $req->execute(array('NomUtilisateur' => $NomUtilisateur,'Email' => $Email,'Mdp' => $Mdp,'Identifiant' => $Identifiant));

    $req->closeCursor();
}


//compare le pseudo en paramètre à ceux de la base de donnée renvoie true s'il n'y a pas déjà le pseudo
function comparer_pseudo($Identifiant){

// se connecter à la base de donnée
$bdd = db_connect();
// Récupération de tous les pseudos
$reponse = $bdd->query('SELECT Identifiant FROM Utilisateur ');
//on compare tous les peudos avec le parametre $Identifiant
while ($donnees = $reponse->fetch())
{
   if ($donnees[Identifiant] == $Identifiant)
   {
    //return true si l'identifiant est déjà utilisé
    return true;  
   }
  
    
}
$reponse->closeCursor();
}
?>