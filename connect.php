<?php
    $serveur = "localhost";
    $dbname = "sae-301";
    $user = "root";
    $pass = "root";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
    }
?>