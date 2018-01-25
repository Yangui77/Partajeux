<?php 
//on ajoute le modele pour utiliser les fonctions
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_connexion.php');

// si le formulaire de connexion est envoyé
if(isset($_POST['connexion']))
{
    //l'utilisateur a entré ses identifiants
    $_POST['Identifiant'] = strtolower(htmlspecialchars($_POST['Identifiant']));
    $_POST['Mdp'] = htmlspecialchars($_POST['Mdp']);
    
    // valeur qui indique si la connexion est valide ou non
    $valid_connexion = connexion($_POST['Identifiant'],$_POST['Mdp']);
        // si les identifiants et mdp sont bon
        if ($valid_connexion){
            //on stock les donnée idUser et pseudo dans le tableau SESSION
        $_SESSION['Identifiant'] = $_POST['Identifiant'];
        $_SESSION['Id'] = get_id($_SESSION['Identifiant']);
    
        }
        //si ils sont mauvais on active le message d'erreur sur la vue
        else ?>  <script> afficher("mauvais_log"); </script>
         <?php
}

?>