<?php

include "bdd.php";
include "UserSession.class.php";

$userSession = new UserSession();

$id = $userSession->getUserId();


if($userSession->isAuthenticated()){

    $req = $bdd->prepare(
        "SELECT * 
        FROM favorite 
        INNER JOIN receipe ON favorite.idProduct = receipe.id
        INNER JOIN product ON favorite.idProduct = product.id
        WHERE idUser = ?"
    );

    $req->execute([$id]);
    $favorite = $req->fetchAll();
   // var_dump($favorite);

  

} 

