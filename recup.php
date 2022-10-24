<?php

    include 'connect.php';
    $dbco = new PDO ('mysql:host=localhost;port=3306;dbname=sae_301','root','');
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $mdp = $_POST["mdp"];

    $sqlQuery = $dbco ->prepare ('INSERT INTO compte(nom, prenom, tel, mdp, mail) VALUES (:nom,:prenom,:tel,:mdp,:mail)');

    // Exécution ! La recette est maintenant en base de données
    $sqlQuery ->bindParam(':nom',$nom);
    $sqlQuery ->bindParam(':prenom',$prenom); 
    $sqlQuery ->bindParam(':tel',$tel);
    $sqlQuery ->bindParam(':mdp',$mdp);
    $sqlQuery ->bindParam(':mail',$mail);
    
    $suc = $sqlQuery->execute();

    if($suc==true){
        include 'billetterie.php';
    }

?>