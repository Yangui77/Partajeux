<?php 
//si on appelle la page accueil 
if(isset($_GET['page'])){
	if($_GET['page'] == "accueil")
	{
		//on affiche la vue accueil
		include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_accueil.php');


	}

}
?>