<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_retirer_jeux_mes_jeux.php');
//si l'utilisateur veut retirer un jeux de ses jeux possédé
if(isset($_POST['retirer_de_mes_jeux'])){
	retirer_jeux_mes_jeux($_SESSION['Id'],$_POST['idJeux_mes_jeux'],'PossedeJeux');
}
// si l'uitlisateur veut retirer un jeux de ses jeux voulu
if(isset($_POST['retirer_de_mes_jeux_voulu'])){
	retirer_jeux_mes_jeux($_SESSION['Id'],$_POST['idJeux_mes_jeux'],'JeuxVoulu');
}



?>