<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_echange.php');


$joueur_interresse = joueur_possede_jeux_voulu($_SESSION['Id']);

echo "<div class="."MesJeux". ">";
echo "<h3 class="."titre-centré".">Vos échanges possibles </br> </h3>";
foreach ($joueur_interresse as $j) {
	echo "<div class="."jeu".">";
	$tab = afficher_jeux_voulu_echange($_SESSION['Id'],$j['idUtilisateur']);
	$tab2 = afficher_jeux_voulu_echange($j['idUtilisateur'],$_SESSION['Id']);

	echo "<a class="."lien".
	" href=index.php?Identifiant=". afficher_nom_joueur($j['idUtilisateur'])." method = "."get".">".ucfirst(afficher_nom_joueur($j['idUtilisateur']))."</a>";
	echo" a : </br> ";
	foreach ($tab as $key => $j2) {

		echo get_NomJeux($j2['idJeux']) .' sur '.get_NomConsole($j2['idConsole']).'/ </br>';
	 		
	 	}
	 	
	 
	 if(($tab2) == NULL){
	echo "et ne veut aucun de vos jeux";
		}
		else{
echo "et veut : </br>";	
	 	foreach ($tab2 as $j3) {
	 	
	 	 echo get_NomJeux($j3['idJeux']) .' sur '.get_NomConsole($j3['idConsole']).'</br>';
	 }}
	
	
}
echo "</div>";

  
  	
// ?> 