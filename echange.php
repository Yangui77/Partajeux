<?php 
session_start();
require('vue/header.php');

if(isset($_SESSION['Identifiant'])){
	include('vue/vue_user.php');
	
	
}
include('controleur/controleur_echange.php');

require('vue/footer.php');

?>