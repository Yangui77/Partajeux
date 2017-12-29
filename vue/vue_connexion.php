<form action="index.php" method="post" class="form_connexion">
        <p>
        <label class="white" for="Idenfiant">Identifiant</label> : 
        <input type="text"  name="Identifiant" id="Identifiant" required />   
        <label class="white" for="Mdp">Mot de passe</label> :  
        <input type="password" name="Mdp" id="Mdp" required />
        <input class="envoyer" type="submit" value="se connecter" name="connexion" />

        <div id="mauvais_log" class ="error">
         Vos identifiants ne sont pas bon 
        </div>
	</p></form>
    <form action="index.php" method="post" class="inscription">
        <input class="envoyer" type="submit" value="s'inscrire" name="inscription"/>
    </form>