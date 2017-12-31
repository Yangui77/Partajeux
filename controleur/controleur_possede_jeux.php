<?php 

include_once('modele/modele_possede_jeux.php');
include_once('modele/modele_description_jeux.php');



$allconsole = get_console($_SESSION['possede_jeux']);
foreach ($allconsole as $console ) {


$idConsole = $_POST[$console['idConsole']];
$verif = possede_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'PossedeJeux');

if($verif && isset($_POST['ajouter_jeux']) || $verif && isset($_POST['ajouter_jeux_voulu']) )
{
echo "vous avez deja ce jeux";
}

if(!$verif && isset($_POST['ajouter_jeux'])){
	ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'PossedeJeux');
	$possede = 1;
}
if(!$verif && isset($_POST['ajouter_jeux_voulu'])){

	ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'JeuxVoulu');
	echo "jeux voulu ajouté";
	$voulu = 1;
}
if($possede == 1||$voulu == 1){
	echo "jeux ajouté";
}


}

?>