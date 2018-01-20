<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_possede_jeux.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_description_jeux.php');

//pour ne pas avoir possede_jeux vide

	//on charge toute les consoles du jeux demandé


$allconsole = get_console($_SESSION['possede_jeux']);
if (isset($allconsole)){
foreach ($allconsole as $console ) {
//pour chaque console
$idConsole = $_POST[$console['idConsole']];
if(isset($idConsole)){
$verif = possede_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'PossedeJeux');

if($verif && isset($_POST['ajouter_jeux']) || $verif && isset($_POST['ajouter_jeux_voulu']) )
{
echo "vous avez deja ce jeux";
}

if(!$verif && isset($_POST['ajouter_jeux'])){
	ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'PossedeJeux');
	$possede = 1;
	echo "jeux ajouté";
}
if(!$verif && isset($_POST['ajouter_jeux_voulu'])){

	ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'JeuxVoulu');
	echo "jeux voulu ajouté";
	$voulu = 1;
}
}

}
}

 ?>