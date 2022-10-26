<?php

    include 'connect.php';

    $jp = $_POST["jp"];
    $jd = $_POST["jd"];
    $jt = $_POST["jt"];
    $id = $_POST["id"];

    $sqlQuery = $dbco ->prepare ('INSERT INTO achete(id_journee) VALUES (:id_journee)');

    // Exécution ! La recette est maintenant en base de données
    if ()
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