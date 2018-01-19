<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_connexion.php');


if(isset($_SESSION['Identifiant'])){
	include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_user.php');		
}
$contenu;
require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/barre_de_recherche.php');
//gère les réponses de la barre de recherche
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/controleur/controleur_barre_de_recherche.php');
//montre les informations du users

require($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/footer.php');

?>