<?php

//se connecter à la base de donnée
function db_connect()
{
    try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=Partajeux;charset=utf8', 'root', 'root');
    	return $bdd;
	}
	
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
}

?>