<?php

include 'connect.php';

$liste= $dbco -> prepare('SELECT * FROM invite WHERE id_invite=:num');

$liste->bindValue(':num', $_GET['numInvite']. PDO::PARAM_INT);

$execute = $liste->execute();

$invite = $liste->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modification</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <form action="modifier.php" method="post">
        <input type="hidden" name="numInvite" value="<?= $invite['id_invite']; ?>">
        <div>
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" value="<?= $invite['nom']; ?>">
        <div>
        <div>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" value="<?= $invite['prenom']; ?>">
        <div>
        <div>
          <label for="role">Rôle :</label>
          <input type="text" id="role" name="role" value="<?= $invite['role']; ?>">
        </div>
        <div>
            <label for="descriptif">Descriptif :</label>
            <input type="text" id="descriptif" name="descriptif" value="<?= $invite['descriptif']; ?>"> 
        </div>  
        <div>
          <label for="photo">Photo :</label>
          <input type="url" id="photo" name="photo" value="<?= $invite['photo']; ?>">
          <p>Format requis : https:// URL</p> 
        </div>
        <div>
            <input type="submit" value="Enregistrer les modifications">
        </div>
      </form>

    <script src="java/script.js"></script>
  </body>
</html>