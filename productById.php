<?php 

include "bdd.php";

$id = $_GET['id'];

$req = $bdd->prepare(
    "SELECT * 
    FROM product
    INNER JOIN receipe ON product.id = receipe.idProduct
    WHERE product.id = ?"
);

$req->execute([$id]);
$product = $req->fetch();

echo json_encode(['product'=>$product]);
