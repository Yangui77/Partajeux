<?php 
//on ajoute le modele pour utiliser les fonctions
include_once('modele/modele_connexion.php');

// si le formulaire de connexion est envoyé
if(isset($_POST['connexion']))
{

    $_POST['Identifiant'] = htmlspecialchars($_POST['Identifiant']);
    $_POST['Mdp'] = htmlspecialchars($_POST['Mdp']);
    
    // valeur qui indique si la connexion est valide ou non
    $valid_connexion = connexion($_POST['Identifiant'],$_POST['Mdp']);

    
        //s'il n'y a pas d'identifiant dans le formulaire

        if(!isset($_POST['Identifiant']) OR empty($_POST['Identifiant']))
        {

            echo 'Votre Identifiant est invalide';

        }
        //s'il n'y a pas de mot de passe dans le formulaire
        if (!isset($_POST['Mdp']) OR empty($_POST['Mdp'])){

            echo 'Veuillez entrer votre mot de passe';
        }
        // si les identifiants et mdp sont bon
        if ($valid_connexion){
        $_SESSION['Identifiant'] = $_POST['Identifiant'];
        $_SESSION['Id'] = get_id($_SESSION['Identifiant']);
        }
        //si ils sont mauvais
        else echo 'Identifiant ou mot de passe incorrect';

}

?>