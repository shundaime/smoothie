<?php 

include "bdd.php";

$id = $_GET['id'];


$req2 = $bdd->prepare(
    "SELECT * 
    FROM comment 
    WHERE idProduct = ?"
);

$req2->execute([$id]);
$showComments = $req2->fetchAll();

echo json_encode(['showComments' => $showComments]);