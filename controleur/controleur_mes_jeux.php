<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_user.php');

//si l'utilisateur appelle sa page perso

if(isset($_POST['mes_jeux'])){
//afficher sa vue mes jeux
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_mes_jeux.php');
	//afficher sa vue mes jeux voulu
include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_jeux_voulu.php');
}

?>