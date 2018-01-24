<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_user.php');

//si l'utilisateur appelle sa page perso

	if(isset($_GET['page']) ){
		$perso = $_GET['page'] == 'perso';
	}
	if(isset($perso) ){
		$idJoueur = $_SESSION['Id'];
	//afficher sa vue mes jeux

	}

	if(isset($_GET['Identifiant'])){
		$idJoueur = get_id($_GET['Identifiant']) ;
		$perso = TRUE;

	}

	if(isset($perso)){
	if($perso){
		$estJoueur = $idJoueur == $_SESSION['Id'];
		include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_mes_jeux.php');
		//afficher sa vue mes jeux voulu
		include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_jeux_voulu.php');
	}}

?>