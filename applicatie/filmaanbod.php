<?php require_once "includes/db_connectie.php";
require_once "includes/haalDataOp.php";

if (isset($_GET['zoekterm'])) {
  $paginaTitel = "Zoekresultaten";
  $zoekterm = $_GET['zoekterm'];
  require_once "includes/zoekpage.php";
} else if (isset($_GET['jaar'])) {
  $jaar = $_GET['jaar'];
  $paginaTitel = "Filterresultaten voor jaar: " . $jaar;
  require_once "includes/filterpage_jaar.php";
} else if (isset($_GET['genre'])) {
  $genre = $_GET['genre'];
  $paginaTitel = "Filterresultaten voor genre: " . $genre;
  require_once "includes/filterpage_genre.php"; 
} else {
  $paginaTitel = "Aanbod";
  require_once "includes/haalFilmsOp.php";
}
require_once "includes/header.php";
?>

<body>
  <main>
    <h1 class="text-center"><?php echo $paginaTitel; ?></h1>
    <form class="" action="filmaanbod.php" method="get">
      <p class="mt-text">Filmjaar:</p>
      <select name="jaar">
        <?php
        foreach ($jaren as $jaar) echo '<option value="' . $jaar . '">' . $jaar . '</option>';
        ?>
      </select>
      <input class="login-button" type="submit" value="Filter">
    </form>
    <form class="" action="filmaanbod.php" method="get">
      <p class="mt-text">Filmgenre:</p>
      <select name="genre">
       <option value="Action">Action</option>
       <option value="Science Fiction">Science Fiction</option>
       <option value="Comedy">Comedy</option>
       <option value="Drama">Drama</option>
      </select>
      <input class="login-button" type="submit" value="Filter">
    </form>
    <div class="movie-list">
      <?php
      foreach ($filmLijst as $film) {
        echo '<div class="movie-list-item zoom">
          <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . '" alt="Film1"><span>' . $film["Titel"] . '</span></a>
        </div>';
      }
      ?>
    </div>

    <?php
    if (!isset($_SESSION['gebruiker'])) {
      echo '<div class="center-div text-center">
      <h1>Interesse?</h1>
      <form action="registreren.php" class="center-div">
        <input class="login-button" type="submit" value="Registreer">
      </form>
    </div>';
    } ?>
  </main>

  <?php
  require_once "includes/footer.php"
  ?>
</body>