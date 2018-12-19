<?php

include "bdd.php";
include "UserSession.class.php";

$email = $_POST['email'];
$password = $_POST['password'];


if(array_key_exists('email', $_POST) && array_key_exists('password', $_POST)){
    $req = $bdd->prepare(
    'SELECT * FROM user
        WHERE mail = ? AND password = ?');
        $req->execute([$email, $password]);
        $user = $req->fetch();

       
        
    if($user['mail'] == $email && $user['password'] == $password){
       $reponse = true;
       $userSession = new UserSession();
       $userSession -> create(
           $user['id'],
           $user['firstName'],
           $user['name'],
           $user['pseudo']
            );
       }
    else{
        $reponse = false; 
    }
    echo json_encode(['reponse' => $reponse]);
}

