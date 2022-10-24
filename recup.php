<?php

    include 'connect.php';

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $mdp = $_POST["mdp"];

    $sqlQuery = 'INSERT INTO `compte-utilisateur`(`Nom`, `Prenom`, `tel`, `Mdp`, `mail`) VALUES (:nom,:prenom,:tel,:mdp,:mail)';

    // Préparation
    $insertRecipe = $dbco->prepare($sqlQuery);

    // Exécution ! La recette est maintenant en base de données
    $insertRecipe->execute([
        'Nom' => $nom,
        'Prenom' => $prenom,
        'tel' => $tel,
        'Mdp' => $mdp,
        'mail' => $mail,
    ]);
        echo "bonjour";
?>