<?php
//collecte données du form


//print_r($_POST['title']); // on veut récuperer ces données et les concatener au insert

/*
$pdo = new PDO('mysql:host=localhost;dbname=forum', 'root'); //lien avec la base  
$sql = "INSERT INTO `topics` (`creator_id`, `title`, `created`) VALUES (1, ($_POST['title']), '2011-02-09 00:45:02')"; 
$pdo->query($sql); */
//ici requête pour envoyer des données à la base 

//Formulaire d'ajout de modif toujours en POST 
//GET plutôt quand on veut pouvoir être capable d'envoyer le lien de la recherche 



//*********************************

// Methode secu en utilisant une requête préparée 

$pdo = new PDO('mysql:host=localhost;dbname=forum', 'root'); //lien avec la base  
$title = $_POST['title']; 
$date = date('Y-m-d H:i:s')


$sql = "INSERT INTO topics (creator_id, title, created) VALUES (1, :title, '$date');"; 

$statement = $pdo->prepare($sql); 
$statement->execute([':title' => $title]); 
