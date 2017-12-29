<?php 
include('modele/modele_possede_jeux.php');

$verif = possede_jeux($_SESSION['Id'],$_SESSION['jeux_voulu']);

if($verif && isset($_POST['ajoutjeux']))
{
echo "vous avez deja ce jeux";
}
if(!$verif && isset($_POST['ajoutjeux'])){

	ajout_jeux($_SESSION['Id'],$_SESSION['jeux_voulu']);
	echo "jeux ajouté";
}

?>