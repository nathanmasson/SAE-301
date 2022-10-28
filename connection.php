<?php

    include 'connect.php';

    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];

    $rechercher=$dbco->prepare('SELECT * FROM compte WHERE mail=? AND mdp=?');
    $rechercher->execute(array($mail, $mdp));
    $trouver=$rechercher->rowCount();

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
<?php 

    <script src="java/script.js"></script>
  </body>
</html>
    if ($trouver==1) {
        include 'billetterie.php';
    }else if ($mail=='admin@gmail.com' && $mdp=='admin123') {
        include 'admin.php';
    }{
        echo "Mail ou mot de passe incorrect";
    }