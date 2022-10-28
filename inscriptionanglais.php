<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subscribe</title>
    <link/>
    <script>
    </script>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <header>
    <?php include 'headeranglais.php';?>
  </header>
    <form action="recup.php" method="post">
        <div>
          <label for="nom">Name :</label>
          <input type="text" id="nom" name="nom" required/>
        <div>
        <div>
            <label for="prenom">First name : </label>
            <input type="text" id="prenom" name="prenom" required/>
        <div>
        <div>
          <label for="mail">E-mail :</label>
          <input type="text" id="mail" name="mail" required/>
        </div>
        <div>
            <label for="tel">Mobile :</label>
            <input type="tel" id="tel" name="tel" maxlength="10" pattern="[0-9]{10}" required />
            <p>Writing format: 0606060606</p>
        </div>  
        <div>
          <label for="mdp">Password :</label>
          <input type="password" id="mdp" name="mdp" minlength="8" maxlength="30" required/>
          <p>Format required :</p> 
          <ul>
            <li>Minimum 8 letterings</li>
            <li>Maximum 30 letterings</li>
          </ul>
        </div>
        <div>
            <input type="submit" value="Inscrivez-vous">
        </div>
        <a href="connexion.html">Login</a>
      </form>
      <footer>
        <?php include 'footeranglais.php';?>
      </footer>
    <script src="script.js"></script>
  </body>
</html>