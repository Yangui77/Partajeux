<?php
$Jeux = info_jeux($_POST['jeux']);
foreach ($Jeux as $Jeu ): 
	$_SESSION['jeux_voulu'] = $Jeu['idJeux'];
?>
<div class="page_jeux">
<h2><?php echo $Jeu['NomJeux']; ?>
</h2>
<h4>Année : <?php echo $Jeu['Année'] ;?>   Console : <?php echo $Jeu['Console']; ?></h4>
<div class="Description_jeux">
</br>
<h1> <h1>
<img src="image/<?php echo $Jeu['idJeux']; ?>.jpg">
<h4>Description : </h4>
<?php echo $Jeu['Description'];?></div>
</div>

<form action="index.php" method="post" class="form_jeux">
 <input id="reponse_jeux" type="submit" value="ajouter ce jeu à ma collection" name="ajouter_jeux" />
 </form>

<?php endforeach; 

?>
