
 <form action="index.php" method="post" class = "form">
 		 <H1 class="titre-centré">Inscription</H1>
        <p>
        <label for="NomUtilisateur">Nom d'utilisateur</label> : </br><input type="text" name="NomUtilisateur" id="Form_inscription" required/><br />
        <label for="Email">Email</label> : </br> <input type="Email" name="Email" id="Form_inscription" required /><br />
        <label for="Mdp">Mot de passe</label> : </br> <input type="password" name="Mdp" id="Form_inscription" required /><br />
        <label for="verif_pass">Veuillez retaper votre mot de passe </label> : </br> <input type="password" name="verif_pass" id="Form_inscription" required />
        <div id="bad_mdp" class ="error">
        Les deux mots de passes sont différents</div>
      
        <label for="Identifiant">Identifiant</label> : </br> <input type="text" name="Identifiant" id="Form_inscription" required />
        </br>
        <div id="bad_id" class ="error">
         Votre Identifiant est déjà utilisé
        </div>
        <input id="Form_inscription_submit" type="submit" value="INSCRIPTION" name="inscription" />
	</p>
</form>