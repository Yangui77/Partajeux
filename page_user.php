<?php 

session_start();


require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_connexion.php');

// si l'utilisateur veut s'inscrire il clique sur le bouton inscription et ça lui afficher la vue inscription
if(isset($_POST['inscription'])){
	require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_inscription.php');
}
//si l'utilisateur n'est pas connecté on lui montre la vue de la connexion.
if (!isset($_SESSION['Identifiant']))
{	 
    require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_connexion.php');
}


//si l'utilisateur est connecté on peut le faire intéragir
else
{
	
//on lui montre la barre de recherche
require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/barre_de_recherche.php');
//gère les réponses de la barre de recherche
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_barre_de_recherche.php');
//montre les informations du users
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_user.php');
//montre les information des jeux du users
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_page_user.php');

}



require('vue/footer.php');



?>
 