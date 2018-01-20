<?php


//si L'utilisateur est connecté on lui montre sa vue
if(isset($_SESSION['Identifiant'])){
	include($_SERVER['DOCUMENT_ROOT'].'/Partajeux/vue/vue_user.php');
	
}

?>