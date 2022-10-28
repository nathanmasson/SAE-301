<?php
    include 'connect.php';

    $liste= $dbco -> prepare('UPDATE invite SET nom=:nom, prenom=:prenom, role=:role, descriptif=:descriptif, photo=:photo WHERE id_invite=:num LIMIT 1');

    $liste->bindValue(':num', $_POST['numInvite']. PDO::PARAM_INT);
    $liste->bindValue(':nom', $_POST['nom']. PDO::PARAM_INT);
    $liste->bindValue(':prenom', $_POST['prenom']. PDO::PARAM_INT);
    $liste->bindValue(':role', $_POST['role']. PDO::PARAM_INT);
    $liste->bindValue(':descriptif', $_POST['descriptif']. PDO::PARAM_INT);
    $liste->bindValue(':photo', $_POST['photo']. PDO::PARAM_INT);

    $execute = $liste->execute();

    if ($execute){
        $message = "Le contact a été mis à jour";
    }else {
        $message = "Echec de la mise à jour de l'invité";
    }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modification : résultat</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Résultat de la modification</h1>
    <p><?= $message ?></p>
    <script src="java/script.js"></script>
  </body>
</html> 