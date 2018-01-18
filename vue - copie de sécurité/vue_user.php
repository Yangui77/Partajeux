<div class="hello">
	<!-- Un lien qui envoie vers la page perso de l'utilisateur -->
	<form action="index.php" method="post" class="lien_mes_jeux">
 	<input id="form_mes_jeux" type="submit" value="<?php echo 'Bonjour '. ucfirst($_SESSION['Identifiant']);?>" name="mes_jeux"/>
	</form>
	<!-- Lien de déconnexion de l'utilisateur -->
	<div id="deconnexion">
	<a class="deconnexion" href="vue/deconnexion.php">Déconnexion</a>
	</div>
</div>

