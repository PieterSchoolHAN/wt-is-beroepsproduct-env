<?php $filmCode = $_GET["filmCode"];
require_once "includes/db_connectie.php";
require_once "includes/haalFilmOp.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="mystyle.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $film["Titel"] ?></title>
</head>

<body>
  <?php require_once "includes/header.php";
  ?>
  <main>
    <div>
      <?php if(isset($_SESSION['admin']) == 1)
      echo '<div class="text-center"><a class="login-button no-decoration" href="filmAanpassen.php?filmCode='.$filmCode.'">Pas film aan</a></div>';
?>
      <h1><?php echo $film["Titel"]; ?></h1>
      <div>
        <div class="flex-filmpagina">
          <div>
            <video poster="data/placeholder.jpg" style="object-fit: fill;" width="800" controls>
              <source src="data/<?php echo $film["Trailer"] ?>" type="video/mp4">
            </video>
          </div>
          <div class="film-content">
            <h2><?php echo $film["Jaar"]; ?> - Duur: <?php echo $film["Duur"]; ?> min.</h2>
            <h3>Categorie: <?php echo $film["Genre"]; ?></h3>
            <h3>Regisseur: <?php echo $film["RegisseurVN"] . ' ' . $film["RegisseurAN"]; ?></h3>
            <h3>Cast: <?php echo $film["ActorVN"] . ' ' . $film["ActorAN"]; ?></h3>
            <p><?php echo $film["Beschrijving"]; ?>
            </p>
          </div>
          <div class="div-flex movie-list-item zoom">
            <img src="data/<?php echo $film["Cover"]; ?>" alt="Film Cover">
          </div>
        </div>
        <hr>
      </div>
    </div>
  </main>

  <?php
  require_once "includes/footer.php"
  ?>
</body>