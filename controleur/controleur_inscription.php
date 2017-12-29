<?php

include_once('modele/modele_inscription.php');
// Chargement des fichiers modèles fonctions enregistrement_membre($pseudo, $pass_hash, $email) et check_bdd($pseudo)
if(isset($_POST['inscription']))
{
    // On rend inoffensif les données de l'utilisateur
    $_POST['NomUtilisateur'] = strtolower(htmlspecialchars($_POST['NomUtilisateur']));
    $_POST['Email'] = htmlspecialchars($_POST['Email']);
    $_POST['Mdp'] = htmlspecialchars($_POST['Mdp']);
    $_POST['Identifiant'] = strtolower(htmlspecialchars($_POST['Identifiant']));
     
    $Test_pseudo = comparer_pseudo($_POST['Identifiant']);
    
    // Verification de la validité de l'inscription
        // Verification du pseudo
        if($Test_pseudo)
        { 
          ?>  <script> afficher("bad_id"); </script> <?php
            
        }
        // Verification du mot de passe
        if($_POST['Mdp'] != $_POST['verif_pass'])
        {
            ?>  <script> afficher("bad_mdp"); </script> <?php
        }
         
        // Si tout est ok on enregistre le membre
        else
        {  // Enregistrement du membre dans la bdd
            ajout_membre($_POST['NomUtilisateur'],$_POST['Email'],$_POST['Mdp'],$_POST['Identifiant']);
            $_SESSION['inscris'] = 'inscris';
             
        }      

}
 
