<?php 

include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_possede_jeux.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Partajeux/modele/modele_description_jeux.php');

//pour ne pas avoir possede_jeux vide

	

if(isset($_SESSION['possede_jeux'])){

	//on charge toute les consoles du jeux demandé
	$allconsole = get_console($_SESSION['possede_jeux']);
	}

if (isset($allconsole)){

	foreach ($allconsole as $console ) {
		//pour chaque console
			if(isset($_POST[$console['idConsole']])){
				//on prend son id
			$idConsole = $_POST[$console['idConsole']];

				if(isset($idConsole)){
					//on vérifie que le joueur n'a pas déjà ce jeux sur cette console
					$verif = possede_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'PossedeJeux');

					//s'il a déjà ce jeux et qu'il veut ajouter un jeux(voulu ou possédé)

						if($verif && isset($_POST['ajouter_jeux']) || $verif && isset($_POST['ajouter_jeux_voulu']) ){
							//on lui affiche :
							echo "vous avez deja ce jeux";
						}
						//s'il n'a pas ce jeu et qu'il veut ajouter ce jeux en jeux possédé : 
						if(!$verif && isset($_POST['ajouter_jeux'])){
							ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'PossedeJeux');
							$possede = 1;
							echo "jeux ajouté";
						}
						//s'il n'a pas ce jeu et qu'il veut ajouter ce jeux en jeux voulu : 
						if(!$verif && isset($_POST['ajouter_jeux_voulu'])){

							ajout_jeux($_SESSION['Id'],$_SESSION['possede_jeux'],$idConsole,'JeuxVoulu');
							echo "jeux voulu ajouté";
							$voulu = 1;
						}
				}
			}
	}
}

 ?>