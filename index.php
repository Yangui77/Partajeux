<?php 

session_start();


include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_connexion.php');

// si l'utilisateur veut s'inscrire il clique sur le bouton inscription et ça lui afficher la vue inscription
if(isset($_POST['inscription'])){
	include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_inscription.php');
}
//si l'utilisateur n'est pas connecté on lui montre la vue de la connexion.
if (!isset($_SESSION['Identifiant']))
{	 
    include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_connexion.php');
}


//si l'utilisateur est connecté on peut le faire intéragir
else
{
	
//on lui montre la barre de recherche
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/barre_de_recherche.php');
//gère les réponses de la barre de recherche
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_barre_de_recherche.php');
//montre les informations du users
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_user.php');
//montre les information des jeux du users
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_mes_jeux.php');
//montre la description d'un jeu
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_description_jeux.php');
//permet à l'utilisateur de retirer ses jeux et ses jeux voulus
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_retirer_jeux_mes_jeux.php');
//permet à l'utilisateur de rajouter ses jeux et ses jeux voulu
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_possede_jeux.php');
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_accueil.php');

}
//vérifie la connexion d'un utilisateur
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_connexion.php');

//vérifie l'inscription d'un utilisateur
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_inscription.php');





include('vue/footer.php');



?>
 