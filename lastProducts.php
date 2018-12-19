<?php

include "bdd.php";

$req = $bdd->prepare(
    "SELECT * 
    FROM product
    ORDER BY dateCreation DESC
    LIMIT 3"
);

$req->execute();
$lastProducts = $req->fetchAll();

?>