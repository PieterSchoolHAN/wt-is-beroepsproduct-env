<?php require_once "includes/header.php";
if(!isset($_SESSION['gebruiker'])) header('Location: /login.php');
require_once "includes/db_connectie.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Fletnix</title>
</head>

<body>
  <main>
    <div class="text-center">
      <video poster="data/placeholder.jpg" style="object-fit: fill;" width="900" controls>
        <source src="data/trailer.mp4" type="video/mp4">
      </video>
    </div>

    <h1 class="grid-aanbevolen">Aanbevolen voor jou</h1>
    <div class="movie-list">
        <?php
        require "includes/randomFilm.php";
        foreach ($filmLijst as $film) {
            echo '<div class="movie-list-item zoom">
            <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . 'onerror="this.onerror=null; this.src="data/placeholder.jpg" alt="Film1"><span>' . $film["Titel"] . '</span></a>
            </div>';
        }
        ?>
    </div>

    <h1>Trending</h1>
    <div class="movie-list">
      <?php
      require "includes/randomFilm.php";
      foreach ($filmLijst as $film) {
        echo '<div class="movie-list-item zoom">
          <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . '" alt="Film1"><span>' . $film["Titel"] . '</span></a>
        </div>';
      }
      ?>
    </div>

    <h1 class="grid-nieuw">Nieuwe releases</h1>
    <div class="movie-list">
      <?php
      require "includes/randomFilm.php";
      foreach ($filmLijst as $film) {
        echo '<div class="movie-list-item zoom">
          <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . '" alt="Film1"><span>' . $film["Titel"] . '</span></a>
        </div>';
      }
      ?>
    </div>

    <h1 class="grid-top10">Top 5 in Nederland</h1>
    <div class="movie-list">
      <?php
      require "includes/randomFilm.php";
      foreach ($filmLijst as $film) {
        echo '<div class="movie-list-item zoom">
          <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . '" alt="Film1"><span>' . $film["Titel"] . '</span></a>
        </div>';
      }
      ?>
    </div>
  </main>

  <?php 
require_once "includes/footer.php"
?>
</body>
</html>

