<?php $filmCode = $_GET["filmCode"];
require_once "includes/db_connectie.php";
require_once "includes/haalDataOp.php";
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
  <title>Film aanpassen</title>
</head>

<body>
  <?php require_once "includes/header.php";
  ?>
  <main>
    <div class="center-div">
      <h1><?php echo $film["Titel"]; ?></h1>
      <form action="includes/aanpassen.php" method="post">
        <div class="mt-text"><label for="filmNaam">Naam film:</label><input type="text" name="filmNaam" value="<?php echo $film["Titel"]; ?>"></div>
        <div class="mt-text"><label for="filmTrailer">Trailer:</label><input type="text" name="filmTrailer" value="<?php echo $film["Trailer"] ?>" /></div>
        <div class="mt-text"><label for="filmJaar">Jaar:</label><input type="number" name="filmJaar" min="1900" max="2023" step="1" value="<?php echo $film["Jaar"]; ?>" /></div>
        <div class="mt-text"><label for="filmDuur">Duur:</label><input type="number" name="filmDuur" min="1" max="240" value="<?php echo $film["Duur"]; ?>" /></div>
        <div class="mt-text"><label for="filmGenre">Genre:</label><select name="filmGenre">
            <?php
            foreach ($genres as $genre) {
              if ($genre == $film["Genre"]) {
                echo '<option value="' . $genre . '" selected>' . $genre . '</option>';
              } else echo '<option value="' . $genre . '">' . $genre . '</option>';
            } ?>
          </select>
        </div>
        <div class="mt-text"><label for="regisseurVN">Voornaam regisseur:</label><input disabled type="text" name="regisseurVN" value="<?php echo $film["RegisseurVN"]; ?>" /></div>
        <div class="mt-text"><label for="regisseurAN">Achternaam regisseur:</label><input disabled type="text" name="regisseurAN" value="<?php echo $film["RegisseurAN"]; ?>" /></div>
        <div class="mt-text"><label for="acteurVN">Voornaam acteur:</label><input disabled type="text" name="acteurVN" value="<?php echo $film["ActorVN"]; ?>" /></div>
        <div class="mt-text"><label for="acteurAN">Achternaam acteur:</label><input disabled type="text" name="acteurAN" value="<?php echo $film["ActorAN"]; ?>" /></div>
        <div class="mt-text"><label for="filmBeschrijving">Beschrijving film:</label><textarea name="filmBeschrijving"><?php echo $film["Beschrijving"]; ?></textarea></div>
        <div class="mt-text"><label for="filmCover">Cover:</label><input type="text" name="filmCover" value="<?php echo $film["Cover"]; ?>" /></div>
        <div class="mt-text"><label for="filmID"></label><input type="hidden" name="filmID" value="<?php echo $filmCode; ?>" /></div>
        <input class="login-button mt-text" type="submit" value="Verstuur">
      </form>
    </div>
  </main>

  <?php
  require_once "includes/footer.php"
  ?>
</body>