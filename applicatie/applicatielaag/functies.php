 <?php
 require_once '../datalaag/db_functies.php';

 // Deze functie genereert de nav bar
 function genereerNavBar() {
    $tekst = '';
    $tekst .= '<h1>';
    $tekst .= '<a href="fletnix.php">Fletnix</a>';
    $tekst .= '</h1>';
    $tekst .= '<nav>';
    $tekst .= '<div>';
    $tekst .= "<form method='get' action='../presentatielaag/filterpagina.php'>";
    $tekst .= "<input name='title' type='text' placeholder='Zoeken op titel..'>";
    $tekst .= "<input name='genre' type='text' placeholder='Zoeken op genre..'>";
    $tekst .= '<button type="submit"><i class="fa fa-search"></i></button>';
    $tekst .= '</form>';
    $tekst .= '</div>';
    $tekst .= '<a href="contact.php">Contact</a>';
    $tekst .= '<a href="privacyverklaring.php">Privacyverklaring</a>';
    if (empty($_SESSION['user'])) { 
    $tekst .= '<a href="login.php">Log in / Registreer</a>';
    } elseif (!empty($_SESSION['user']) && $_SESSION['user'] !== 'FOUT'){
       $tekst .= '<a>' . $_SESSION['user'] . '</a>';
       $tekst .= '<a href="../presentatielaag/fletnix.php?ingelogd=false">Uitloggen</a>';
    }
    $tekst .= '</nav>';
    return $tekst;
 }

 // Deze functie genereert de films
function genereerFilms($aantal_films) {
   global $tekst;
   global $nummer;
   $tekst = '';
   $nummer = 0;
   $tekst .= '<div class="grid">';
   foreach (ophalenFilms() as $film) {
      if ($nummer === $aantal_films) {
         break;
      } else {
      $tekst .= '<div class="media">';
      $tekst .= '<div class="trailer">';
      $tekst .= '<iframe src="https://www.youtube.com/embed/HPk-VhRjNI8" allowfullscreen></iframe>';
      $tekst .= '</div>';
      $tekst .= '<img src="placeholder.png" alt="Placeholder">';
      $tekst .= '<a href="film_pagina.php?film='. $film['movie_id'].'"'.'>'. $film['title'] .'</a>';
      $tekst .= '</div>';
      $nummer = $nummer + 1;
      }
   }
   return $tekst;
  }

  // Deze functie genereert de gefilterde pagina met films (dus gefiltert op genre en/of titel)
  function genereerGenres($aantal_films) {
   global $tekst;
   global $nummer;
   $tekst = '';
   $nummer = 0;
   $tekst .= '<div class="grid">';
   
   if (!empty(ophalenGenres())) { 
   foreach (ophalenGenres() as $film) {
      if ($nummer === $aantal_films) {
         break;
      } else {
      $tekst .= '<div class="media">';
      $tekst .= '<div class="trailer">';
      $tekst .= '<iframe src="https://www.youtube.com/embed/HPk-VhRjNI8" allowfullscreen></iframe>';
      $tekst .= '</div>';
      $tekst .= '<img src="placeholder.png" alt="Placeholder">';
      $tekst .= '<a href="film_pagina.php?film='. $film['movie_id'].'"'.'>'. $film['title'] .'</a>';
      $tekst .= '</div>';
      $nummer = $nummer + 1;
      }
   }
   return $tekst;
} elseif (empty(ophalenGenres())) {
   return 'Je hebt niks ingevuld';
}
}

// Deze functie genereert voor de filminfo voor de gekozen film
function genereerInfo() {
   global $tekst;
   $movie_id = $_GET['film'];
   $tekst = '';
   $films = ophalenInfo($movie_id);
   $acteurs = ophalenActeurs($movie_id);
   $regisseurs = ophalenRegisseurs($movie_id);
   foreach ($films as $film){
         $tekst = '<h2>' . $film['title']. '</h2>';
         $tekst .= '<table>';
         $tekst .= '<tr>';       
         $tekst .= '<th>Duur (in minuten)</th>';                
         $tekst .= '<td>' . $film['duration']. '</td>';                 
         $tekst .= '</tr>';            
         $tekst .= '<tr>';            
         $tekst .= '<th>Publicatiejaar</th>';                
         $tekst .= '<td>' . $film['publication_year']. '</td>';                
         $tekst .= '</tr>';            
         $tekst .= '<tr>';      
         $tekst .= '<th>Regisseur</th>';
         foreach($regisseurs as $regisseur) {                
         $tekst .= '<td>' . $regisseur['firstname'].' '. $regisseur['lastname']. '</td>'; 
        }               
         $tekst .= '</tr>';           
         $tekst .= '<tr>';            
         $tekst .= '<th>Cast</th>';
         foreach($acteurs as $acteur) {                
         $tekst .= '<td>' . $acteur['firstname'].' '. $acteur['lastname'].'</td>';
         }                
         $tekst .= '</tr>';            
         $tekst .= '<tr>';             
         $tekst .= '<th>Beschrijving</th>';              
         $tekst .= '<td>' . $film['description']. '</td>';                
         $tekst .= '</tr>';                
         $tekst .= '</table>';  
      }
   return $tekst;     
}

// Deze functie genereert de filterknop ('aanbevolen genres')
function genereerFilterKnop() {
   $tekst = '';
   $tekst .= '<div class="maincontainer">';
   $tekst .= '<div class="dropdown">';
   $tekst .= '<button class="dropdown-button">Aanbevolen genres</button>';
   $tekst .= '<div class="dropdown-content">';
   $tekst .= '<a href="filterpagina.php?genre=action">Actie</a>';
   $tekst .= '<a href="filterpagina.php?genre=drama">Drama</a>';
   $tekst .= '<a href="filterpagina.php?genre=comedy">Komedie</a>';
   $tekst .= '<a href="filterpagina.php?genre=crime">Misdaad</a>';
   $tekst .= '<a href="filterpagina.php?genre=sci-fi">Sciencefiction</a>';
   $tekst .= '</div>';
   $tekst .= '</div>';
   return $tekst;
}

// Deze functie genereert de contactpagina
function genereerContact() {
   $tekst = '';
   $tekst .= '<h2>Contact</h2>';
   $tekst .= '<h3>Deze website is gemaakt door Bram Schenkels.</h3>';
   $tekst .= '<h3>Mocht u vragen hebben kunt u me bereiken via:</h3>';
   $tekst .= '<ul>';
   $tekst .= '<li>E-mail: bwa.schenkels@student.han.nl</li>';
   $tekst .= '<li>Tel.: 0643156994</li>';
   $tekst .= '</ul>';
   return $tekst;
}

// Deze funtie genereert de films op de beheerpagina (zodat je de gewenste film kunt kiezen die je wilt aanpassen)
function genereerFilmsBeheer($aantal_films) {
   global $tekst;
   global $nummer;
   $tekst = '';
   $nummer = 0;
   $tekst .= '<div class="grid">';
   foreach (ophalenGenres() as $film) {
      if ($nummer === $aantal_films) {
         break;
      } else {
      $tekst .= '<div class="media">';
      $tekst .= '<div class="trailer">';
      $tekst .= '<iframe src="https://www.youtube.com/embed/HPk-VhRjNI8" allowfullscreen></iframe>';
      $tekst .= '</div>';
      $tekst .= '<img src="placeholder.png" alt="Placeholder">';
      $tekst .= '<a href="film_aanpassen.php?beheer='. $film['movie_id'].'"'.'>'. $film['title'] .'</a>';
      $tekst .= '</div>';
      $nummer = $nummer + 1;
      }
   }
   return $tekst;
}

// Deze functie checkt of de titel en/of genre geset zijn
function controleerGenereerFilmsBeheer() {
   if (
      isset($_GET['title']) & isset($_GET['genre']) || isset($_GET['title']) & !isset($_GET['genre']) ||
      !isset($_GET['title']) & isset($_GET['genre'])
 ) {
      echo genereerFilmsBeheer(10);
 }
}

// Deze functie genereert de form op de aanpaspagina en zet de huidige filminfo in de bijbehorende placeholders
function genereerBeheerInfo() {
   global $tekst;
   $movie_id = $_GET['beheer'];
   $tekst = '';
   $films = ophalenInfo($movie_id);
   foreach($films as $film){
   $tekst = '<form action="film_aanpassen.php" method="POST">';
   $tekst .= '<label for="title">Titel:</label>';
   $tekst .= '<input type="text" id="title" name="title" placeholder="'. $film['title'].'" required>';
   $tekst .= '<label for="duur">Duur:</label>';
   $tekst .= '<input type="text" id="duur" name="duration" placeholder="'. $film['duration'].'" required>';
   $tekst .= '<label for="jaar">Publicatiejaar:</label>';
   $tekst .= '<input type="text" id="jaar" name="publication_year" placeholder="'. $film['publication_year'].'" required>';
   $tekst .= '<label for="beschrijving">Beschrijving:</label>';
   $tekst .= '<input type="text" id="beschrijving" name="description" placeholder="'. $film['description'].'" required>';
   $tekst .= '<label for="movieid">Vul de MOVIE ID in ter bevestiging:</label>';
   $tekst .= '<input type="text" id="movie" name="movieid" placeholder="'. $movie_id .'" required>';
   $tekst .= '<button type="submit">Pas film aan</button>';
   $tekst .= '</form>';
   }
   return $tekst;
}

// Deze functie controleert of de get geset is
function controleerGenereerBeheerInfo() {
   if (isset($_GET['beheer'])) {
      echo genereerBeheerInfo();
 }
}

// Deze functie zorgt ervoor dat de filminfo aangepast kan worden
function veranderFilmInfo() {
if (isset($_POST['title']) && isset($_POST['duration']) && isset($_POST['publication_year']) && isset($_POST['description'])){
  $verbinding = maakVerbinding();
  $sql = 'UPDATE Movie 
  set title = ?, duration = ?, publication_year = ?, description = ?
  where movie_id = ?';
  $movie = $_POST['movieid'];
  $newTitle = $_POST['title'];
  $newDuration = $_POST['duration'];
  $newPublicationYear = $_POST['publication_year'];
  $newDescription = $_POST['description'];
  $verzenden = $verbinding->prepare($sql);
  $verzenden->execute([$newTitle, $newDuration, $newPublicationYear, $newDescription, $movie]);
  unset($_POST);
   }
}

// Deze functie genereert de form waarmee een nieuwe film toegevoegd kan worden
function genereerFilmToevoegForm() {
   global $tekst;
   $tekst = '<form action="film_toegevoegd.php" method="POST">';
   $tekst .= '<label for="movieid">Movie ID:</label>';
   $tekst .= '<input type="text" id="movie" name="movieid" placeholder="123456" required>';
   $tekst .= '<label for="title">Titel:</label>';
   $tekst .= '<input type="text" id="title" name="title" placeholder="Titel" required>';
   $tekst .= '<label for="duur">Duur:</label>';
   $tekst .= '<input type="text" id="duur" name="duration" placeholder="100" required>';
   $tekst .= '<label for="jaar">Publicatiejaar:</label>';
   $tekst .= '<input type="text" id="jaar" name="publication_year" placeholder="2000" required>';
   $tekst .= '<label for="beschrijving">Beschrijving:</label>';
   $tekst .= '<input type="text" id="beschrijving" name="description" placeholder="Beschrijving" required>';
   $tekst .= '<label for="prijs">Prijs:</label>';
   $tekst .= '<input type="text" id="prijs" name="price" placeholder="2.50" required>';
   $tekst .= '<button type="submit">Voeg film toe</button>';
   $tekst .= '</form>';
   return $tekst;
}

// Deze functie voegt een nieuwe film toe aan de database
function voegFilmToe() {
   $verbinding = maakVerbinding();
   $sql = 'INSERT INTO Movie (movie_id, title, duration, description, publication_year, price)
   VALUES (?, ?, ?, ?, ?, ?)';
   $verzenden = $verbinding->prepare($sql);
   $verzenden->execute([$_POST['movieid'], $_POST['title'], $_POST['duration'], $_POST['description'], $_POST['publication_year'] , $_POST['price'] ]);
   unset($_POST);
}
?>