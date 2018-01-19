<?php 

session_start();

require('vue/header.php');
include('controleur/controleur_connexion.php');

// si l'utilisateur veut s'inscrire il clique sur le bouton inscription et ça lui afficher la vue inscription
if(isset($_POST['inscription'])){
	require('vue/vue_inscription.php');
}
//si l'utilisateur n'est pas connecté on lui montre la vue de la connexion.
if (!isset($_SESSION['Identifiant']))
{	 
    require('vue/vue_connexion.php');
}
//si l'utilisateur est connecté on peut le faire intéragir
else
{
//on lui montre la barre de recherche
require('vue/barre_de_recherche.php');
//gère les réponses de la barre de recherche
include('controleur/controleur_barre_de_recherche.php');
//montre les informations du users
include('controleur/controleur_user.php');
//montre les information des jeux du users
include('controleur/controleur_mes_jeux.php');
//montre la description d'un jeu
include('controleur/controleur_description_jeux.php');
//permet à l'utilisateur de retirer ses jeux et ses jeux voulus
include('controleur/controleur_retirer_jeux_mes_jeux.php');
//permet à l'utilisateur de rajouter ses jeux et ses jeux voulu
include('controleur/controleur_possede_jeux.php');

}
//vérifie la connexion d'un utilisateur
include('controleur/controleur_connexion.php');

//vérifie l'inscription d'un utilisateur
include('controleur/controleur_inscription.php');





require('vue/footer.php');



?>
 