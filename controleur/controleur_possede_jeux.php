<?php 

include('modele/modele_possede_jeux.php');

$verif = possede_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],'PossedeJeux');
if($verif && isset($_POST['ajouter_jeux']) || $verif && isset($_POST['ajouter_jeux_voulu']) )
{
echo "vous avez deja ce jeux";
}
if(!$verif && isset($_POST['ajouter_jeux'])){

	ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],'PossedeJeux');
	echo "jeux ajouté";
}
if(!$verif && isset($_POST['ajouter_jeux_voulu'])){
	ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],'JeuxVoulu');
	echo "jeux voulu ajouté";

}

?>