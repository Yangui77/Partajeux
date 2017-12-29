<?php 

session_start();

require('vue/header.php');
include('controleur/controleur_connexion.php');

if(isset($_POST['inscription'])){
	require('vue/vue_inscription.php');
}
if (!isset($_SESSION['Identifiant']))
{	 
    require('vue/vue_connexion.php');
}
else
{
require('vue/barre_de_recherche.php');
include('controleur/controleur_barre_de_recherche.php');
include('controleur/controleur_user.php');
include('controleur/controleur_mes_jeux.php');
include('controleur/controleur_description_jeux.php');





}
include('controleur/controleur_connexion.php');
include('controleur/controleur_possede_jeux.php');

include('controleur/controleur_inscription.php');





require('vue/footer.php');



?>
 