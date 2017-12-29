<ul>
<?php $rjeux = recherche_jeux($_POST['search']);
foreach ($rjeux as $rj ): 
?>
<!-- <li><a href="index.php" name="<?php echo $rj['idJeux']?>" > <?php echo $rj['NomJeux']; ?> </li></a> -->
<form action="./index.php" method="post" class="form_jeux">
 <input id="reponse_jeux"type="submit" value="<?php echo $rj['NomJeux']; ?>" name="jeux" />
 </form>
<?php endforeach; ?>

</ul>