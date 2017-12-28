<?php
//si L'utilisateur est connecté on lui montre sa vue
if(isset($_SESSION['Identifiant'])){
	include('vue/vue_user.php');
}
?>