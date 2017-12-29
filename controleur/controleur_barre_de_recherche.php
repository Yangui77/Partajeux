<?php 
include_once('../modele/modele_barre_de_recherche.php');


if(isset($_POST['search']) && !empty($_POST['search'])){
	include('../vue/reponse_recherche.php');
}

?>