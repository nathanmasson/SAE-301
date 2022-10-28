<?php

    include 'connect.php';

    $liste= $dbco -> prepare('DELETE FROM invite WHERE id_invite=:num LIMIT 1');

    $liste->bindValue(':num', $_GET['numInvite']. PDO::PARAM_INT);

    $execute = $liste->execute();

    if ($execute){
        $message = "Le contact a été supprimé";
    }else {
        $message = "Echec de la suppression de l'invité";
    }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suppression</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Suppression</h1>
    <p><?= $message ?></p>
    <script src="java/script.js"></script>
  </body>
</html> 