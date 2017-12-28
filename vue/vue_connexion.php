<form action="./index.php" method="post" class="form">
	<H1 class="titre-centré">Connexion</H1>
        <p>
        <label for="Idenfiant">Identifiant</label> : </br>
        <input type="text"  name="Identifiant" id="Identifiant" required /><br />
        <label for="Mdp">Mot de passe</label> :  </br>
        <input type="password" name="Mdp" id="Mdp" required /><br />
        <br/>
        <input type="submit" value="CONNEXION" name="connexion" />
        <div id="mauvais_log" class ="error">
         Vos identifiants ne sont pas bon
        </div>
	</p>
</form>