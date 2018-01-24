<div class="hello">
	<!-- Un lien qui envoie vers la page perso de l'utilisateur -->
	<form action="index.php" method="post" class="lien_mes_jeux">
 	 <div class = "bonjour"><?php echo 'Bonjour '. ucfirst($_SESSION['Identifiant']);?>
 	 	
 	 </div>
 	
	</form>
	<!-- Lien de déconnexion de l'utilisateur -->
	<div id="deconnexion">
	<a class="deconnexion" href="vue/deconnexion.php">Déconnexion</a>
	</div>
</div>

</div>