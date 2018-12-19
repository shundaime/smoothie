<?php

include "bdd.php";


    $email = $_POST['email'];
    $password = $_POST['password'];
    $pseudo = $_POST['pseudo'];
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];

$req = $bdd->prepare(
        "INSERT INTO 
        user (mail, pseudo, password, firstName, name, address, zipCode, city
        ) VALUES (?,?,?,?,?,?,?,?)");
        $user = $req->execute([$email, $pseudo, $password, $firstName, $name, $address, $zip, $city]);
        
        if($user){
            $reponse = true;
         }
         echo json_encode(['reponse' => $reponse]);
    
    



