<?php
include('modele/modele_inscription.php');
// Chargement des fichiers modèles fonctions enregistrement_membre($pseudo, $pass_hash, $email) et check_bdd($pseudo)
if(isset($_POST['inscription']))
{
    // On rend inoffensif les données de l'utilisateur
    $_POST['NomUtilisateur'] = htmlspecialchars($_POST['NomUtilisateur']);
    $_POST['Email'] = htmlspecialchars($_POST['Email']);
    $_POST['Mdp'] = htmlspecialchars($_POST['Mdp']);
    $_POST['Identifiant'] = htmlspecialchars($_POST['Identifiant']);
     
    $Test_pseudo = comparer_pseudo($_POST['Identifiant']);
    
    // Verification de la validité de l'inscription
        // Verification du pseudo
        if(!isset($_POST['Identifiant']) OR empty($_POST['Identifiant']) OR  $Test_pseudo)
        {
            echo 'Veuillez saisir un nouveau pseudo, il est soit vide soit déjà existant.';
        }
        elseif(empty($_POST['Mdp'])){

            echo 'Veuillez saisir un mot de passe';
        }
         
        // Verification du mot de passe
        elseif(!isset($_POST['Mdp']) OR !isset($_POST['verif_pass']) OR empty($_POST['Mdp']) OR $_POST['Mdp'] != $_POST['verif_pass'])
        {
            echo 'Les deux mots de passes ne sont pas identiques, veuillez les saisir à nouveau';
        }
         
        // Si tout est ok on enregistre le membre
        else
        {
            ajout_membre($_POST['NomUtilisateur'],$_POST['Email'],$_POST['Mdp'],$_POST['Identifiant']);

             echo 'Vous avez été inscrit connectez vous <a href="./index.php"> ici </a> ';
             
            // Enregistrement du membre dans la bdd
           
        }      
}
 
// S'il n'y a pas d'inscription en cours alors on affiche le formulaire
else
{
    include_once('./inscription.php');
}