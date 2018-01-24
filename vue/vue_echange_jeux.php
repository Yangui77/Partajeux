<div class="MesJeux">
<?php 
	
$tab = afficher_jeux_voulu_echange($_SESSION['Id'],$idjoueur);
$tab2 = afficher_jeux_voulu_echange($idjoueur,$_SESSION['Id']);

	?><h1 class="titre-centré">
	<?php 
	
			echo "VOUS" ;
	?>
	</h1>
	<FORM action="index.php" method=post>
	 <SELECT class="form_echange_jeux" name="echange_jeux_moi" size="1">
	 	<?php

	foreach ($tab2 as $key => $j2) {
		$idJeux = $j2['idJeux'];
		$idConsole = $j2['idConsole'];
		$jeu = $idJeux.",".$idConsole;

		echo "<OPTION value=".$jeu.">".get_NomJeux($j2['idJeux']) .' sur '.get_NomConsole($j2['idConsole']).'/ </br>';
	 		?>
	 	
   
   
<?php } ?>
		 </SELECT>
		

</div>

<div class="MesJeux">
<?php 
	
$tab = afficher_jeux_voulu_echange($_SESSION['Id'],$idjoueur);
$tab2 = afficher_jeux_voulu_echange($idjoueur,$_SESSION['Id']);

	?><h1 class="titre-centré">
	<?php 
	
			echo ucfirst(afficher_nom_joueur($idjoueur));
	?>
	</h1>

	 <SELECT class="form_echange_jeux" name="echange_jeux_autre" size="1">
	 	<?php

	foreach ($tab as $key => $j2) {
		$idJeux = $j2['idJeux'];
		$idConsole = $j2['idConsole'];
		$jeu = $idJeux.",".$idConsole;
	
		echo "<OPTION value=".$jeu."> ".get_NomJeux($j2['idJeux']) .' sur '.get_NomConsole($j2['idConsole']).'/   </br></OPTION>';
	 		?>
	 	
   
   
<?php } ?>
		 </SELECT>
		 <input type="submit" value="Echanger">
    </FORM>

</div>


