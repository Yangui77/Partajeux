<H1 class="titre-centré">Votre page perso</H1>
</br>
<div class="MesJeux">
	<h1 class="titre-centré">VOS JEUX</h1>
<?php
$Jeux = jeux($_SESSION['Id'],'PossedeJeux');

foreach ($Jeux as $Jeu ): 
?>
<div class="jeu">
<form action="index.php" method="post" class="lien_page_jeux">
<h2><input id="lien_page_jeux" type="submit" value="<?php echo $Jeu['NomJeux'];?>" name="jeux" /></h2>

 </form>
<h4>Année : <?php echo $Jeu['Année'] ;?> </h4>
<h4>Console :  <?php 
$allconsole = get_console($Jeu['idJeux']);

foreach ($allconsole as $console) {
echo $console['NomConsole'] . "   ";
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
