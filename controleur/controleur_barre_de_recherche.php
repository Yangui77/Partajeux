<?php 
include_once('../modele/modele_barre_de_recherche.php');

//si une recherche est envoyé 
if(isset($_POST['search']) && !empty($_POST['search'])){
	//on affiche la réponse de la recherche
	include('../vue/reponse_recherche.php');
}

?>