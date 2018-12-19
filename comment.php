<?php
include "bdd.php";


if(!empty($_POST["pseudo"]) && !empty($_POST["comment"])){
    $id=$_POST['id'];
    $pseudo=$_POST['pseudo'];
    $commentaire = $_POST['comment'];
    $idUser = $_GET['idUser'];

$req = $bdd->prepare(
    "INSERT INTO comment (pseudo, content, idProduct, idUser)
    VALUES (?, ?, ?)");


$req->execute([$pseudo, $commentaire, $id]); 

}