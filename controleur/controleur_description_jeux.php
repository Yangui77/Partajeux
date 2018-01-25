<?php 
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_description_jeux.php');
//si on a demander la page d'un jeux 
if(isset($_POST['jeux'])){
	//on affiche la vue du jeux
	include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_description_jeux.php');
} 
?>