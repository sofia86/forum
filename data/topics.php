<?php

//Pour pouvoir créer requête sql
$pdo = new PDO('mysql:host=localhost;dbname=forum', 'root');
//On veut récupérer les données de la table topics 
return $pdo
		->query('SELECT * FROM topics;')
		->fetchAll(PDO::FETCH_ASSOC); 












//**** Avt cours PDO 
//Tableau corresponds à la table topics dans mySql
/*return [
	[
		"id" => 1,
		"title" => "Bonjour",
		"date" => time() + 3600,
	],
	[
		"id" => 2,
		"title" => "Bonjour1",
		"date" => time() + 2 * 3600,
	],
	[
		"id" => 3,
		"title" => "Bonjour2",
		"date" => time() + 3 * 3600,
	],
	[
		"id" => 4,
		"title" => "Bonjour3",
		"date" => time() + 4 * 3600,
	],
	[
		"id" => 5,
		"title" => "Bonjour4",
		"date" => time() + 5 * 3600,
	],
];
*/
