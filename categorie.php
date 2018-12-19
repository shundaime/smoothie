<?php

include "bdd.php";

$req = $bdd->prepare(
    "SELECT * 
    FROM categorie"
);

$req->execute();
$categories = $req->fetchAll();


?>


