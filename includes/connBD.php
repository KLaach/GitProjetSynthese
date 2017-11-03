<?php
	try{
		$db = new PDO('mysql:host=localhost; dbname=projetsynthese', 'root' , '');
	}catch(Exception $e){
		die('Erreur connexion à la base : ' . $e->getMessage());
	}
?>