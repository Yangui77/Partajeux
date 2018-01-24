<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_echange.php');
//si on a demandé la page échange
if(isset($_GET['page'])){
		if($_GET['page'] == 'echange'){
			// on affiche la vue echange
			include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_echange.php');
			}
}
?> 