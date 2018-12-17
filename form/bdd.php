<?php
 
 //APPEL de La Base de Données

 $bdd = new PDO('mysql:host=localhost;dbname=smoothie', 'root', 'troiswa',  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]
  );

  $bdd->exec("SET NAMES UTF8");

