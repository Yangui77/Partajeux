<?php 

session_start();

require('vue/header.php');

include('controleur/controleur_connexion.php');
include('controleur/controleur_inscription.php');
if (!isset($_SESSION['Identifiant']))
{
	require('vue/vue_inscription.php');
	require('vue/vue_connexion.php');

}
include('controleur/controleur_user.php');
require('vue/footer.php');



?>
 