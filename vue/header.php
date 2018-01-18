<!DOCTYPE html>
<!-- ANCIENNE VERSION -- FAUT IL GARDER QC DE CA?
<html>
    <head> 

    	<meta charset="utf-8" />
		  <link rel="stylesheet" href="style.css" />
      <script type="text/javascript" src="javascript/jquery.js"></script>
      <script type="text/javascript" src="javascript/javascript.js"></script>

 
        <title>Partajeux</title>
        
         
        <ul id="navigation">
  <li><a href="#" title="aller à la section 1">item1</a></li>
  <li><a href="#" title="aller à la section 2">item2</a></li>
  <li><a href="#" title="aller à la section 2">Partajeux</a></li>
    <h5>Partajeux<h5>
        </ul>
 </head>
<body>-->


<html>
	<head>
		<title>Partajeux</title>
	</head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<body>
		<!-- Header with search bar-->
		<div class="w3-display-container w3-teal" style="height:45px;">
		<div class="w3-bar">		
			<!-- welcome-->
			<div class="w3-bar-item w3-mobile w3-display-left"<h5><?php echo 'Bonjour '. ucfirst($_SESSION['Identifiant']);?></h3>
			</div>
			<!-- search bar with icon-->
			<div class="w3-bar-item w3-mobile w3-display-topmiddle">
				<div id="form_recherche">
					<form method="post" action="">
						<input type="text" size="51" placeholder="Search.." name="search" id="search"/>
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
					<div id="resultat_recherche">
						<ul>

						</ul>
					</div>
				</div>
			</div>
			<!-- log out-->
			<div id="deconnexion">
				<a class="deconnexion w3-bar-item w3-button w3-mobile w3-display-right" href="vue/deconnexion.php">Déconnexion</a>
			</div>
		</div>
		</div>
	</body>
	</html>



	