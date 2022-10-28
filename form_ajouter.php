<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <form action="ajouter.php" method="post">
        <div>
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom">
        <div>
        <div>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom">
        <div>
        <div>
          <label for="role">Rôle :</label>
          <input type="text" id="role" name="role">
        </div>
        <div>
            <label for="descriptif">Descriptif :</label>
            <input type="text" id="descriptif" name="descriptif"> 
        </div>  
        <div>
          <label for="photo">Photo :</label>
          <input type="url" id="photo" name="photo">
          <p>Format requis : https:// URL</p> 
        </div>
        <div>
            <input type="submit" value="Ajouter les modifications">
        </div>
      </form>

    <script src="script.js"></script>
  </body>
</html>
