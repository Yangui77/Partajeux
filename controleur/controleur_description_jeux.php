<?php 
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_description_jeux.php');
if(isset($_POST['jeux'])){
	include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_description_jeux.php');
} 
?>