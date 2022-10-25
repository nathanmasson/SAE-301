<?php

    include 'connect.php';

    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    $rechercher=$dbco->prepare('SELECT * FROM compte WHERE mail=? AND mdp=?');
    $rechercher->execute(array($mail, $mdp));
    $trouver=$rechercher->rowCount();
    if ($trouver==1) {
        include 'billetterie.php';
    }else{
        echo "Mail ou mot de passe incorrect";
    }
?>