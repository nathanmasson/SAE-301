

<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Billeterie</title>
  <link/>
  <script>
  </script>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h2>Veuillez sélectionner les journées que vous souhaitez réserver</h2>
  <form action="recupbill.php" method="post">
    <div>
      <input type="number" name="id" value="<?php echo ?>">
    </div>
    <div>
      <input type="checkbox" id="jp" name="1" checked>
      <label for="jp">Première journée</label>
    </div>
    <div>
      <input type="checkbox" id="jd" name="2">
      <label for="jd">Deuxième journée</label>
    </div>
    <div>
      <input type="checkbox" id="jt" name="3" checked>
      <label for="jt">Troisième journée</label>
    </div>
    <div>
        <input type="submit" value="Inscrivez-vous">
    </div>
  </form>
  <script src="script.js"></script>
</body>
</html>