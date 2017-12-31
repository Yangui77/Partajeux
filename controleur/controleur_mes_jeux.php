<?php 
include_once('modele/modele_user.php');

//si l'utilisateur appelle sa page perso
if(isset($_POST['mes_jeux'])){
	//afficher sa vue mes jeux
include('vue/vue_mes_jeux.php');
	//afficher sa vue mes jeux voulu
include('vue/vue_jeux_voulu.php');
}
?>