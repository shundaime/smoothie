<?php
include "bdd.php";


$idCategorie = $_GET['id'];

$req = $bdd->prepare(
    "SELECT * 
    FROM product 
    INNER JOIN categorie ON categorie.id = product.idCategorie
    WHERE idCategorie = ?"
);

$req->execute([$idCategorie]);
$productByCategorie = $req->fetchAll();

echo json_encode(['productByCategorie'=>$productByCategorie]);

?>