<?php 
include_once('modele/modele_connexion.php');

if(isset($_POST['connexion']))
{

    $_POST['Identifiant'] = htmlspecialchars($_POST['Identifiant']);
    $_POST['Mdp'] = htmlspecialchars($_POST['Mdp']);
    
    $valid_connexion = connexion($_POST['Identifiant'],$_POST['Mdp']);

    
        

        if(!isset($_POST['Identifiant']) OR empty($_POST['Identifiant']))
        {

            echo 'Votre Identifiant est invalide';

        }
        if (!isset($_POST['Mdp']) OR empty($_POST['Mdp'])){

            echo 'Veuillez entrer votre mot de passe';
        }

        if ($valid_connexion){
        $_SESSION['Identifiant'] = $_POST['Identifiant'];
        echo 'Vous êtes connecté' ;
        }
        else echo 'Identifiant ou mot de passe incorrect';

}

?>