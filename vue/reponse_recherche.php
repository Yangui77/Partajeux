<ul>
	<!-- On utilise la fonction recherche_jeux qui affiche les jeux qui ressemble au nom '$_POST['seach']' -->
<?php $rjeux = recherche_jeux($_POST['search']);
//on affiche les noms de chaque jeux dans un form
foreach ($rjeux as $rj ): 
?>
<form action="index.php" method="post" class="form_jeux">
 <input id="reponse_jeux" type="submit" value="<?php echo $rj['NomJeux']; ?>" name="jeux" />
 </form>
<?php endforeach; ?>

</ul>