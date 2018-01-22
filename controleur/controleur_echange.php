<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_echange.php');
if(isset($_GET['page'])){
		if($_GET['page'] == 'echange'){
			include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_echange.php');
			}
}
?> 