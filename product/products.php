<?php 

include "bdd.php";

$req = $bdd->prepare(
    "SELECT * 
    FROM product
    ORDER BY nameProduct ASC"
);

$req->execute();
$allProducts = $req->fetchAll();



echo json_encode(['allProducts'=>$allProducts]);

?>