<?php
include 'connect.php';
    
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$role = $_POST["role"];
$descriptif = $_POST["descriptif"];
$photo = $_POST["photo"];

$liste = $dbco ->prepare ('INSERT INTO invite(nom, prenom, role, descriptif, photo) VALUES (:nom,:prenom,:role,:descriptif,:photo)');

// Exécution ! La recette est maintenant en base de données
$liste ->bindParam(':nom',$nom);
$liste ->bindParam(':prenom',$prenom); 
$liste ->bindParam(':role',$role);
$liste ->bindParam(':descriptif',$descriptif);
$liste ->bindParam(':photo',$photo);

$execute = $liste->execute();

if ($execute){
    $message = "Le contact a été ajouter";
}else {
    $message = "Echec de l'ajout de l'invité";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ajout : résultat</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<h1>Résultat de l'ajout</h1>
<p><?= $message ?></p>
<script src="script.js"></script>
</body>
</html> 