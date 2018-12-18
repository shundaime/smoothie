<?php
 
 //APPEL de La Base de Données

 $bdd = new PDO('mysql:host=localhost;dbname=smoothie','root', ''); //on se connecte à la BDD en renseignant le nom de la BDD et les identifiants 
 $bdd->exec("SET NAMES UTF8");//la liaison se fait en UTF8
 $bdd = new PDO('mysql:host=localhost;dbname=smoothie', 'root', '',  [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]
);

$bdd->exec("SET NAMES UTF8");

?>