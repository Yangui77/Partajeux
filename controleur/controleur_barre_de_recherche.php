<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_barre_de_recherche.php');
//si une recherche est envoyé 
if(isset($_POST['search']) && !empty($_POST['search'])){
	//on affiche la réponse de la recherche
	include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/reponse_recherche.php');
}

?>