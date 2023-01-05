<?php
require_once 'db_connectie.php';

// Deze functie haalt films op uit de database
function ophalenFilms() {
  $verbinding = maakVerbinding(); 
  $sql = 'SELECT title, movie_id 
  FROM Movie
  ORDER BY title';
  $data = $verbinding->prepare($sql);
  $data->execute();
  $films = $data->fetchAll(); 
  return $films;
}

// Deze functie haalt films op uit de database (voor de zoek- en filterfunctie)
function ophalenGenres() {
  global $films;
  $verbinding = maakVerbinding(); 
 if (!empty($_GET['title']) && !empty($_GET['genre'])) {
   echo $_GET['genre'];
  $sql = 'SELECT DISTINCT title, m.movie_id 
  FROM Movie m INNER JOIN Movie_Genre mg ON m.movie_id = mg.movie_id 
  WHERE genre_name LIKE ? AND title LIKE ?
  ORDER BY title';
  $data = $verbinding->prepare($sql);
  $_GET['genre'] = '%' . trim($_GET['genre']) . '%';
  $_GET['title'] = '%' . trim($_GET['title']) . '%';
  $data->execute([$_GET['genre'], $_GET['title']]);
  $films = $data->fetchAll();

} elseif (!empty($_GET['genre']) && empty($_GET['title'])) {
  $sql = 'SELECT DISTINCT title, m.movie_id 
  FROM Movie m INNER JOIN Movie_Genre mg ON m.movie_id = mg.movie_id 
  WHERE genre_name LIKE ?
  ORDER BY title';
  $data = $verbinding->prepare($sql);
  $_GET['genre'] = '%' . trim($_GET['genre']) . '%';
  $data->execute([$_GET['genre']]);
  $films = $data->fetchAll();

} elseif (!empty($_GET['title']) && empty($_GET['genre'])) {
  $sql = 'SELECT DISTINCT title, movie_id 
  FROM Movie 
  WHERE title LIKE ?
  ORDER BY title';
  $data = $verbinding->prepare($sql);
  $_GET['title'] = '%' . trim($_GET['title']) . '%';
  $data->execute([$_GET['title']]);
  $films = $data->fetchAll();

}
return $films;
}
 
// Deze functie haalt filminfo uit de Movie tabel op uit de database
function ophalenInfo($film) {
  $verbinding = maakVerbinding();
  $sql = 'SELECT title, duration, description, publication_year 
  FROM Movie 
  WHERE movie_id = ?';
  $data = $verbinding->prepare($sql);
  $data->execute([$film]);
  $films = $data->fetchAll(); 
  return $films; 
}

// Deze functie haalt de cast uit de Movie_Cast tabel op uit de database 
function ophalenActeurs($film) {
  $verbinding = maakVerbinding();
  $sql = 'SELECT P.lastname, P.firstname 
  FROM Movie_Cast MC INNER JOIN Person P ON MC.person_id = P.person_id 
  WHERE MC.movie_id = ?';
  $data = $verbinding->prepare($sql);
  $data->execute([$film]);
  $acteurs = $data->fetchAll(); 
  return $acteurs;
}

// Deze functie haalt de regisseur uit de Movie_Director tabel op uit de database 
function ophalenRegisseurs($film) {
  $verbinding = maakVerbinding();
  $sql = 'SELECT P.lastname, P.firstname
  FROM Movie_Director MD INNER JOIN Person P ON MD.person_id = P.person_id 
  WHERE MD.movie_id = ?';
  $data = $verbinding->prepare($sql);
  $data->execute([$film]);
  $regisseurs = $data->fetchAll(); 
  return $regisseurs; 
}

// Deze functie haalt de gebruikersnaam (email) van de gebruiker op uit de database
function ophalenGebruikersnaam() {
  $verbinding = maakVerbinding();
  $email = $_POST["email"];
  $sql = 'SELECT user_name
          from Customer
          where  customer_mail_address = ?';
  $query = $verbinding->prepare($sql);
  $query->execute([$email]);
  $resultaat = $query->fetch();
  return $resultaat['user_name'];
}

// Deze functie genereert het landen dropdown menu (wordt gebruikt bij het registreren van een gebruiker)
function genereerLandenDropDown() {
  $data = maakVerbinding()->query("SELECT country_name FROM Country");
  while ($landen = $data->fetch()) {
      foreach (array_unique($landen) as $land){
          echo("<option value='$land'>$land</option>");
          }
    }
}

// Deze functie genereert het betaal dropdown menu (wordt gebruikt bij het registreren van een gebruiker)
function genereerBetaalDropDown() {
  $data = maakVerbinding()->query("SELECT payment_method FROM payment");
  while ($betaalmethodes = $data->fetch()) {
      foreach (array_unique($betaalmethodes) as $betaalmethode){
          echo("<option value='$betaalmethode'>$betaalmethode</option>");
          }
    }
}


