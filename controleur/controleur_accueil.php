<?php 
if(isset($_GET['page'])){
	if($_GET['page'] == "accueil")
	{
		include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_accueil.php');


	}

}
?>