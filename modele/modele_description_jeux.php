<?php
include_once('libs.php');

//retourne un array avec les jeux de l'utilisateur avec en parametre son id
function info_jeux($NomJeux){
	$bdd = db_connect();
	$reponse = $bdd->prepare('SELECT NomJeux,Description,Année,idJeux FROM Jeux WHERE Nomjeux = :NomJ ');
    $reponse->execute(array('NomJ' => $NomJeux));
	$result = $reponse->fetchAll();
	return $result;
    }


//retourne toutes les consoles qui peuvent utiliser le jeux en fonction de l'id du jeux
function get_console($idJeux){
  $bdd = db_connect();
  $reponse = $bdd->prepare('SELECT NomConsole, idConsole FROM Console NATURAL JOIN ConsoleDispo NATURAL JOIN Jeux WHERE idJeux = :idJeux');
  $reponse->execute(array('idJeux' => $idJeux));
  $donnees = $reponse->fetchALL();
  return $donnees;
}