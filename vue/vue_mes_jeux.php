<H1 class="titre-centré">Votre page perso</H1>
</br>
<div class="MesJeux">
	<h1 class="titre-centré">VOS JEUX</h1>
<?php
$Jeux = jeux($_SESSION['Id']);
foreach ($Jeux as $Jeu ): 
?>
<div class="jeu">
<form action="index.php" method="post" class="lien_page_jeux">
<h2><input id="lien_page_jeux" type="submit" value="<?php echo $Jeu['NomJeux'];?>" name="jeux" /></h2>

 </form>
<h4>Année : <?php echo $Jeu['Année'] ;?> </h4>
<h4>Console : <?php echo $Jeu['Console']; ?>
</h4>
<h4>Description : </h4><div class="Description">
<?php echo $Jeu['Description'];?></div>
</div>


<?php endforeach; ?>
</div>
