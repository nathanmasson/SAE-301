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
        <div class="conteneur">
        <div class="boxe">
            <div class="infoo">
                <div class="oktexte">
                    <h2>Information</h2>
                    Ce festival de court-métrage ce déroule chaque année et commence cette année avec pour thème le fantastique. Pour cette première foi, des invités de marques avec deux grands réalisateurs français qui nous font le plaisir d’être les parrains de l’événement, on retrouvera bien sur des acteurs ainsi que des influenceurs. Pour cette première édition, nous mettrons à l’honneur Georges Méliès, un grand nom dans le cinéma puisqu’il est l’un des précurseurs dans le domaine du fantastique dans le cinéma.
                </div>
                <a href="info.php" class="lieninfo">Voir plus d'information sur le Festival</a>
            </div>
            <div class="verti"></div>
            <div class="map">
                <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3446.3953110372217!2d3.8824608074242057!3d45.04028302866318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5fa5472eba401%3A0x30eb4863ad1d5cee!2sTh%C3%A9%C3%A2tre%20du%20Puy-En-Velay!5e0!3m2!1sfr!2sfr!4v1666874061227!5m2!1sfr!2sfr"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
            </div>
        </div>
    </div>
      <footer>
      <?php include 'footer.php'; ?>
      </footer>
    <script src="script.js"></script>
  </body>
</html>
