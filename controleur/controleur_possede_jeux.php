<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_possede_jeux.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_description_jeux.php');


if(isset($_SESSION['possede_jeux'])){
$allconsole = get_console($_SESSION['possede_jeux']);
foreach ($allconsole as $console ) {

if(isset($_POST[$console['idConsole']]))
{
$idConsole = $_POST[$console['idConsole']];
}

if(isset($idConsole)){
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
if (isset($possede)AND isset($voulu)){
if($possede == '1'||$voulu == '1' ){
	echo "jeux ajouté";
}}


}}}

?>