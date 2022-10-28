<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le Fantastique du Velay</title>
    <link/>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
        <header>
          <?php include 'header.php';?>
        </header>
        <script src="script.js"></script>
        <div id="slider">
          <img src="banieres/paysage1.png" alt="La forêt de peupliers" id="slide" width="100%">
          <div id="precedent" onclick="ChangeSlide(-1)"><</div>
          <div id="suivant" onclick="ChangeSlide(1)">></div>
      </div>
      <footer>
      <?php include 'footer.php'; ?>
      </footer>
    <script src="script.js"></script>
  </body>
</html>
