<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_echange.php');
//si on a demander la page échange
$echange = isset($_GET['echange']);
//si on appelle la page transaction 



if($echange){
	//on récupère l'id du joueur avec qui on veut échanger
$idjoueur = get_id($_GET['echange']);
$_SESSION['echange_joueur'] = $idjoueur;

//si on veut la page échange
		if(isset($_GET['echange'])){

			include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_echange_jeux.php');
			}
}

?>