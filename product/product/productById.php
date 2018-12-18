<?php 

include "bdd.php";

$req = $bdd->prepare(
    "SELECT * 
    FROM product
    WHERE id = ?"
);

$req->execute([$_GET['id']]);
$product = $req->fetch();

echo json_encode(['product'=>$product]);
