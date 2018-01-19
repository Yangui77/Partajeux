<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:16%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Changer mes données</a>
  <a href="vue/vue_mes_jeux.php" class="w3-bar-item w3-button">Mes jeux</a>
  <a href="vue/vue_jeux_voulu.php" class="w3-bar-item w3-button">Jeux voulus</a>
  <a href="#" class="w3-bar-item w3-button">Jeux échangés</a>
</div>

<?php
$Jeux = info_jeux($_POST['jeux']);
foreach ($Jeux as $Jeu ): 
	$_SESSION['possede_jeux'] = $Jeu['idJeux'];
?>
<div class="page_jeux">
<h2><?php echo $Jeu['NomJeux']; ?>
</h2>
<h4>Année : <?php echo $Jeu['Année'] ;?> 
Console : <?php 
$allconsole = get_console($Jeu['idJeux']);
foreach ($allconsole as $console) {
echo $console['NomConsole'] . "   ";
}
?>
	
</h4>

<div class="Description_jeux">
</br>
<h1> <h1>
<img src="image/<?php echo $Jeu['idJeux']; ?>.jpg">
<h4>Description : </h4>
<?php echo $Jeu['Description'];?></div>
<form action="index.php" method="post" class="form_jeux_description">
<?php foreach ($allconsole as $console) {?>

	<INPUT type="checkbox" name="<?php echo $console['idConsole'] ?>" value="<?php echo $console['idConsole'] ?>"> <?php echo $console['NomConsole']; 
}
?>

<input id="reponse_jeux" type="submit" value="ajouter ce jeu à ma collection" name="ajouter_jeux" />
</form>

<form action="index.php" method="post" class="form_jeux_description">
	<?php foreach ($allconsole as $console) {?>
	<INPUT type="checkbox" name="<?php echo $console['idConsole'] ?>" value="<?php echo $console['idConsole'] ?>"> <?php echo $console['NomConsole']; 
}
?>

<input id="reponse_jeux" type="submit" value="ajouter ce jeu à mes jeux voulu" name="ajouter_jeux_voulu" />
</form>

</div>

<?php endforeach; 

?>
