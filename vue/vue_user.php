<?php 
include_once('modele/modele_user.php');?>


<div class="hello"><?php echo 'Bonjour '. $_SESSION['Identifiant'];?>
	<a class="deconnexion" href="vue/deconnexion.php">Déconnexion</a>
</div>
<div class="MesJeux">
<?php
$Jeux = jeux($_SESSION['Id']);
foreach ($Jeux as $Jeu ): 
?>
<div class="jeu">
<h1>Nom du jeux : <?php echo $Jeu['NomJeux']; ?> </h1>
<h4>Description du jeu : <?php echo $Jeu['Description'] ;?> </h4>
<h4>Année : <?php echo $Jeu['Année'] ;?> </h4>
<h4>Console : <?php echo $Jeu['Console']; ?>
</h4>
</div>
<?php endforeach; ?>
</div>