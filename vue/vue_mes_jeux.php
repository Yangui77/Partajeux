<div class="MesJeux">
	<h1 class="titre-centré">VOS JEUX</h1>
<?php
$Jeux = jeux($_SESSION['Id']);
foreach ($Jeux as $Jeu ): 
?>
<div class="jeu">
<h2><?php echo $Jeu['NomJeux']; ?> </h2>
<h4>Année : <?php echo $Jeu['Année'] ;?> </h4>
<h4>Console : <?php echo $Jeu['Console']; ?>
</h4>
<h4>Description : </h4><div class="Description">
<?php echo $Jeu['Description'];?></div>
</div>


<?php endforeach; ?>
</div>
