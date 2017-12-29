<?php
$Jeux = info_jeux($_POST['jeux']);
foreach ($Jeux as $Jeu ): 
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


<?php endforeach; ?>

