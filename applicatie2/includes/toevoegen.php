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
        "filmBeschrijving" => $_POST["filmBeschrijving"]
    );
}

function voegFilmToe($filmgegevens)
{
  $verbinding = maakVerbinding();

//film??
  $query = $verbinding->prepare("insert into Movie (movie_id, title, duration, description, publication_year, cover_image, price, trailer)
  select MAX(movie_id) + 1, :filmNaam, :filmDuur, :filmBeschrijving, :filmJaar, :filmCover, '5.00', :filmTrailer from Movie");

  $query->execute([':filmNaam' => $filmgegevens['filmNaam'], ':filmDuur' => $filmgegevens['filmDuur'], ':filmBeschrijving' => $filmgegevens['filmBeschrijving'], ':filmJaar' => $filmgegevens['filmJaar'], ':filmCover' => $filmgegevens['filmCover'], ':filmTrailer' => $filmgegevens['filmTrailer']]);

//genre??
$verbinding = maakVerbinding();

$query = $verbinding->prepare("insert into Movie_Genre (movie_id, genre_name)
select MAX(movie_id), :filmGenre from Movie");
    
$query->execute([':filmGenre' => $filmgegevens['filmGenre']]);

//director, genre, cast??
$verbinding = maakVerbinding();

    $query = $verbinding->prepare("insert into Movie_Cast (movie_id, person_id, role)
    select MAX(movie_id), '1239', 'niks' from Movie
    insert into Movie_Director (movie_id, person_id)
    select MAX(movie_id), '1239' from Movie");
  
    $query->execute();

return true;
  }

if (voegFilmToe($filmgegevens)) {
    //header('Location: /filmaanbod.php');
}
?>