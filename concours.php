<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le Fantastique du Velay</title>
    <link/>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>
    
    <div class="expliconcours">
      <div class="text1">
            <h1>Le Festival de Courts-métrages fantastiques George Meliés organise un concours !</h1>
      </div>
      <div class="text2">
          <h1>Les règles sont simples :<br> Produire, réaliser et monter un court-métrage et nous l'envoyer. <br> 20 courts-métrages seront présentés lors du festival <br>et feront office d'un vote lors de la fin de celui-ci.<br><br> Il y aura un gagnant par type de court métrage <br>et le vote sera basé sur différents critères disponibles ci-dessous</h1>
      </div>
      <div class="text3">
        <h1>Les différentes catégories et leurs prix :</h1>
      </div>
      <div class="choix">
        <div class="animation">
        <a class="lien2" href="#anim"><h1>Animation</h1></a>
      </div> 
      <div class="avecfx">
        <a class="lien2" href="#fx"><h1>Avec FX</h1></a>
    </div> 
    <div class="realistique">
      <a class="lien2" href="#reel"><h1>Réalistique</h1></a>  
    </div>
    </div>
  </div>
  <h1 class="TtAnimation" id="anim">Animation</h1>
  <div class="anim">
    <div class="anim0">
      <div class="anim1" ><h1>Réaliser un court-métrage <br>ne dépassant pas 35minutes<br> entierement composé d'images de synthèse (3D)</h1></div>
      <div class="anim2"><h1>Critères pris en compte :</h1></div>
      <div class="anim3"><h1> -Le Scénario <br><br>-Le montage <br><br>-La qualité de l'animation <br><br>-L'acting (voix) <br><br></h1></div>
    </div> 
    <span class="tres"></span>
    <div class="imganim" id="anim">
      <img src="images/The_Adventures_of_Tintin-3D_Movie_Wallpaper_18_1920x1200.jpg" width="100%" height="100%" >
    </div>
    </div>
    <h1 class="TtAnimation" id="fx">Effets Spéciaux</h1>
  <div class="fx" id="fx">
    <div class="fx0">
      <div class="fx1"><h1>Réaliser un court-métrage <br>ne dépassant pas 35minutes<br>composé d'effets spéciaux <br>rajoutés au montage sur des images réelles.</h1></div>
      <div class="fx2"><h1>Critères pris en compte :</h1></div>
      <div class="fx3"><h1> -Le Scénario <br><br>-Le montage <br><br>-La qualité des effets speciaux <br><br>-L'acting <br><br>-La qualité des maquillages et des décors mis en place. <br<br></h1></div>
    </div> 
    <span class="tres"></span>
    <div class="imgfx">
      <img src="images/IMG_20201211_185816_523.jpg" width="100%" height="100%" >
    </div>
    </div>
    <h1 class="TtAnimation" id="reel">Réalistique</h1>
  <div class="reel" id="reel">
    <div class="reel0">
      <div class="reel1"><h1>Réaliser un court-métrage <br>ne dépassant pas 35minutes<br> uniquement composé d'images réelles.</h1></div>
      <div class="reel2"><h1>Critères pris en compte :</h1></div>
      <div class="reel3"><h1> -Le Scénario <br><br>-Le montage<br><br>-La qualité des maquillages et des décors mis en place. <br><br>-L'acting<br><br></h1></div>
    </div> 
    <span class="tres"></span>
    <div class="imgreel">
      <img src="images/johanna-buguet-W2D5bsAySEM-unsplash.jpg" width="100%" height="100%" >
    </div>
    </div>
    <footer>
      <?php include 'footer.php'; ?>
      </footer>
    <script src="script.js"></script>
  </body>
</html>
