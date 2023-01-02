<?php require_once "includes/header.php";
if(!isset($_SESSION['gebruiker'])) header('Location: /login.php');
require_once "includes/db_connectie.php";
?>

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
          <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . '" alt="Film1"><span>' . $film["Titel"] . '</span></a>
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