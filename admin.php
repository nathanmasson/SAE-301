<?php 
include 'connect.php';

$liste= $dbco -> prepare('SELECT * FROM invite');

$execute = $liste->execute();

$invite = $liste->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrateur</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <h1>Liste des invités</h1>
    <ul>
      <?php foreach ($invite as $invites): ?>
        <li>
          <?= $invites['nom']?> <?= $invites['prenom']?>
          <?= $invites['role']?> <?= $invites['descriptif']?>
          <?= $invites['photo']?> <a href="form_modification.php?numInvite=<?= $invites['id_invite']?>">
            Modifier</a> <a href="ajouter.php?numInvite=<?= $invites['id_invite']?>">
            Ajouter</a> <a href="supprimer.php?numInvite=<?= $invites['id_invite']?>">
            Supprimer</a>
        </li>
      <?php endforeach; ?>
    </ul>

    <script src="script.js"></script>
  </body>
</html>