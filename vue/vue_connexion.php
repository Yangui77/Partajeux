<form action="index.php" method="post" class="form_connexion">
        <p>
        <label class="white" for="Idenfiant">Identifiant</label> : 
        <input class ="connexion_info" type="text"  name="Identifiant" id="Identifiant" required />   
        <label class="white" for="Mdp">Mot de passe</label> :  
        <input class= "connexion_info"type="password" name="Mdp" id="Mdp" required />
        <input class="envoyer" type="submit" value="Se connecter" name="connexion" />
        </p> 
        </form>
        <div id="mauvais_log" class ="error">
         Vos identifiants ne sont pas bon 
        </div>
	   <form action="index.php" method="post" class="inscription">
        <input class="envoyer" type="submit" value="Inscription" name="Fomulaire_inscription"/>
    </form>