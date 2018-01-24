<H1 class="titre-centré">
	<?php 
	$pseudoJoueur = ucfirst(afficher_nom_joueur($idJoueur));
	if($estJoueur){
			echo "Votre page perso";
	}
	else 
		echo "La page perso de ". $pseudoJoueur ?>
	</H1>
</br>
<div class="MesJeux">
	<h1 class="titre-centré">
	<?php 
	if($estJoueur){
			echo "VOS JEUX";
	}
	else 
		echo "Les jeux de ". $pseudoJoueur?>
	</h1>
<!-- On stock dans $Jeux toutes les infos des jeux possédés par l'utilisateur -->
<?php

$Jeux = jeux($idJoueur,'PossedeJeux');
//on les afficher sur la page
foreach ($Jeux as $Jeu ): 
?>
<div class="jeu">
<form action="index.php" method="post" class="lien_page_jeux">
<h2><input id="lien_page_jeux" type="submit" value="<?php echo $Jeu['NomJeux'];?>" name="jeux" /></h2>

 </form>
<h4>Année : <?php echo $Jeu['Année'] ;?> </h4>
<h4>Console : <?php 
$console_possede = get_console_jeux($idJoueur,$Jeu['idJeux'],'PossedeJeux');
foreach($console_possede as $Console){
	echo $Console['NomConsole'] . " /  ";
}
?>

</h4>
<h4>Description : </h4><div class="Description">
<?php echo $Jeu['Description'];?>
	
</div>
<?php 
if($estJoueur){?>
<form action="index.php" method="post" class="form_mes_jeux">
<input id="idJeux_mes_jeux" type="text" value="<?php get_id_jeux($Jeu['NomJeux']); ?>" name="idJeux_mes_jeux" />
 <input id="reponse_jeux" type="submit" value="J'ai menti je n'ai pas ce jeux" name="retirer_de_mes_jeux" />
 </form>
 <?php } ?>
</div>


<?php endforeach;
if(empty($Jeux)){
echo "<h3 class="."titre-centré"."> Vous n'avez pas de jeu </br>Veuillez en rajouter </h3>";
}
?>


</div>
