<!--<H1 class="titre-centré">Votre page perso</H1>-->
</br>
<div class="MesJeux">
	<h2	class="titre-centré">MES JEUX</h2>
	<!-- Sidebar -->
	<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:16%">
	  <h3 class="w3-bar-item">Menu</h3>
	  <a href="#" class="w3-bar-item w3-button">Changer mes données</a>
	  <a href="vue/vue_mes_jeux.php" class="w3-bar-item w3-button">Mes jeux</a>
	  <a href="vue/vue_jeux_voulu.php" class="w3-bar-item w3-button">Jeux voulus</a>
	  <a href="#" class="w3-bar-item w3-button">Jeux échangés</a>
	</div>
	<!-- On stock dans $Jeux toutes les infos des jeux possédés par l'utilisateur -->
	<?php
	$Jeux = jeux($_SESSION['Id'],'PossedeJeux');
	//on les affiche sur la page
	foreach ($Jeux as $Jeu ): 
	?>
	<div class="jeu">
	<form action="index.php" method="post" class="lien_page_jeux">
	<h2><input id="lien_page_jeux" type="submit" value="<?php echo $Jeu['NomJeux'];?>" name="jeux" /></h2>

	 </form>
	<h4>Année : <?php echo $Jeu['Année'] ;?> </h4>
	<h4>Console : <?php 
	$console_possede = get_console_jeux($_SESSION['Id'],$Jeu['idJeux'],'PossedeJeux');
	foreach($console_possede as $Console){
		echo $Console['NomConsole'] . " /  ";
	}
	?>

	</h4>
	<h4>Description : </h4><div class="Description">
	<?php echo $Jeu['Description'];?>
		
	</div>
	<form action="index.php" method="post" class="form_mes_jeux">
	<input id="idJeux_mes_jeux" type="text" value="<?php get_id_jeux($Jeu['NomJeux']); ?>" name="idJeux_mes_jeux" />
	 <input id="reponse_jeux" type="submit" value="J'ai menti je n'ai pas ce jeux" name="retirer_de_mes_jeux" />
	 </form>
	</div>


	<?php endforeach;
	if(empty($Jeux)){
	echo "<h3 class="."titre-centré"."> Vous n'avez pas de jeu </br>Veuillez en rajouter </h3>";
	}
	?>


</div>
