<!-- ANCIENNE VERSION -- FAUT IL GARDER QC DE CA?


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
        <input class="envoyer" type="submit" value="Inscription" name="inscription"/>
    </form>-->
	
<!DOCTYPE html>
<html>
<head>
<title>Parta'jeux</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<body>

<div class="w3-container w3-teal">
	  <h1>Bienvenue au Partajeux</h1>
</div>
	
<div class="w3-cell-row w3-margin-top">
	<div class="w3-container w3-cell w3-mobile" style="width:35%">
		  <p><!-- connection form-->
			 <form action="index.php" method="post" class="form_connexion">
			 <fieldset>
			  <legend><h2>Connexion</h2></legend>
			  Identifiant:<br>
			  <input class ="connexion_info" type="text"  name="Identifiant" id="Identifiant" required /><br>
			  Mot de passe:<br>
			  <input class= "connexion_info"type="password" name="Mdp" id="Mdp" required /><br>
			  <br>
			  <input class="envoyer" type="submit" value="Se connecter" name="connexion" />
			  </fieldset>
			</form>
			<!-- error message if the identifiers are wrong-->
			<div id="mauvais_log" class ="error">
			 Vos identifiants ne sont pas bons.
			</div>
			</section>
			<br>
			<br>
			
			<!-- registration form-->
			<form action="index.php" method="post" class = "form">
			<fieldset>
			  <legend><h2>Inscription</h2></legend>
			  Nom utilisateur :<br>
			  <input type="text" name="NomUtilisateur" id="Form_inscription" placeholder="username" required/><br>
			  <br>
			  Adresse mail :<br>
			  <input type="Email" name="Email" id="Form_inscription" placeholder="example@example.com" required/><br>
			  <br>
			  Mot de passe :<br>
			  <input type="password" name="Mdp" id="Form_inscription" required/><br>
			  Mot de passe (vérification) :<br>
			  <input type="password" name="verif_pass" id="Form_inscription" required/><br>
			  <!-- error message if the two passwords are not the same-->
			  <div id="bad_mdp" class ="error">
				Les deux mots de passe sont différents.
			  </div>				
			  <br>
			  Identifiant : </br> <input type="text" name="Identifiant" id="Form_inscription" required/><br>
			  <br>
			  <!-- error message if identifier is already taken-->
			  <div id="bad_id" class ="error">
				Votre Identifiant est déjà utilisé.
			  </div>
			  <input id="Form_inscription_submit" type="submit" value="Inscription" name="inscription" />
			  </fieldset>
			</form>
			</p>
	</div>

	<div class="w3-container w3-cell w3-mobile" style="width:65%">
	 <div class="w3-container w3-center">
	  <img class ="w3-margin-top" src="image/acu.jpg" style="width:95%">
	   <div class="w3-container w3-center">
		<p>
		<h2>Partajeux</h2>		
		Est une plateforme de mise en relation qui permet aux utilisateurs d'échanger pour une durée de temps leur jeux video en ligne.
		Ils déterminent grâce à l'application les jeux qu'ils veulent échanger, puis fixe un rendez-vous (durée, date, heure, lieu de l'échange).
		L'utilisateur doit pouvoir se connecter à l'application, s'identifier, ajouter ses jeux à échanger et ses jeux voulu.
		L'utilisateur pourra rechercher les jeux qu'il veut, l'application affichera les utilisateurs qui peuvent potentiellement échanger
		(ils sont intéressé par un de nos jeux, ou ont la console pour un de nos jeux).

		L'utilisateur pourra ensuite proposer un échange et attendra confirmation . 
		Lorsque l'échange s'effectue les utilisateurs confirment l'échange et les jeux deviennent indisponible.
		Lorsque la durée de l'échange est terminé les utilisateurs doivent confirmer le retour des jeux pour qu'ils redeviennent disponible dans l'application.
		</p>
	   </div>
	 </div> 
	</div> 
</div>

</body>
</html>

<!-- add user:-->

