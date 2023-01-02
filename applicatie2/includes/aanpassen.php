<?php

require_once "db_connectie.php";

if (isset($_POST)) {
    $filmgegevens = array(
        "filmNaam" => $_POST["filmNaam"],
        "filmTrailer" => $_POST["filmTrailer"],
        "filmJaar" => $_POST["filmJaar"],
        "filmDuur" => $_POST["filmDuur"],
        "filmGenre" => $_POST["filmGenre"],
        "filmCover" => $_POST["filmCover"],
        "filmBeschrijving" => $_POST["filmBeschrijving"],
        "filmID" => $_POST["filmID"]
    );
}

function pasFilmAan($filmgegevens)
{

    $verbinding = maakVerbinding();

    $query = $verbinding->prepare("update Movie
  set title=:filmNaam, duration=:filmDuur, description=:filmBeschrijving, publication_year=:filmJaar, cover_image=:filmCover
  where movie_id=:filmID");


    $query->execute([':filmNaam' => $filmgegevens['filmNaam'], ':filmDuur' => $filmgegevens['filmDuur'], ':filmBeschrijving' => $filmgegevens['filmBeschrijving'], ':filmJaar' => $filmgegevens['filmJaar'], ':filmCover' => $filmgegevens['filmCover'], ':filmID' => $filmgegevens['filmID']]);


    $query = $verbinding->prepare("update Movie_Genre
  set genre_name=:filmGenre
  where movie_id=:filmID");

    $query->execute([':filmGenre' => $filmgegevens['filmGenre'], ':filmID' => $filmgegevens['filmID']]);
    return true;
}

if (pasFilmAan($filmgegevens)) {
    header('Location: /filmaanbod.php');
}
?>