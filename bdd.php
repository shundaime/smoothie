<?php
 
 //APPEL de La Base de Données

 $bdd = new PDO('mysql:host=localhost;dbname=smoothie','root','troiswa'); //on se connecte à la BDD en renseignant le nom de la BDD et les identifiants 
 $bdd->exec("SET NAMES UTF8");//la liaison se fait en UTF8

?>