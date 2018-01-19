<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_echange.php');
echo "Vos échanges";
$j = joueur_possede_jeux_voulu($_SESSION['Id']);
foreach ($j as $joeur) {
	echo $joeur['idUtilisateur'];
}
?> 