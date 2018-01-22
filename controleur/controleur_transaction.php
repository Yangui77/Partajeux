<?php $transaction = isset($_POST['echange_jeux_moi']) || isset($_POST['echange_jeux_autre'] );
if($transaction){


			$jeu1 = ( explode( ',', $_POST['echange_jeux_moi']));
			$jeu2 = ( explode( ',', $_POST['echange_jeux_autre']));

            $j1 = $_SESSION['Id'];
			$j2 = $_SESSION['echange_joueur'];
			$idJeux1 = $jeu1[0];
			$idConsole1 = $jeu1[1];
			$idJeux2 = $jeu2[0];
			$idConsole2 = $jeu2[1]; 
			echo "Proposition d'échange créée : </br>". ucfirst(afficher_nom_joueur($j1)). '(Vous) ' ;
			echo get_NomJeux($idJeux1) .'  ';
			echo 'sur '.get_NomConsole($idConsole1) . '  ';
			echo '</br> contre </br>'. ucfirst(afficher_nom_joueur($j2)). ' ' ;
			echo get_NomJeux($idJeux2) . '  ';
			echo 'sur '.get_NomConsole($idConsole2) . '  ';

		}
?>