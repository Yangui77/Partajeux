<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_retirer_jeux_mes_jeux.php');
if(isset($_POST['retirer_de_mes_jeux'])){
	retirer_jeux_mes_jeux($_SESSION['Id'],$_POST['idJeux_mes_jeux'],'PossedeJeux');
}
if(isset($_POST['retirer_de_mes_jeux_voulu'])){
	retirer_jeux_mes_jeux($_SESSION['Id'],$_POST['idJeux_mes_jeux'],'JeuxVoulu');
}



?>