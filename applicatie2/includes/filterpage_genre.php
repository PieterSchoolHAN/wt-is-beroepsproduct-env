<?php
//Filter op genre
$db = maakVerbinding();

$query = $db->prepare("select M.movie_id as Movie_ID, M.title as Titel, M.cover_image as Cover
from Movie M
join Movie_Genre G
on M.movie_id = G.movie_id
where G.genre_name = :genre");

$data = $query->execute([':genre' => $genre]);

$filmLijst = array();
$film = array();

while ($rij = $query->fetch()) {
  $film = ["Movie_ID" => $rij['Movie_ID'], "Titel" => $rij['Titel'], "Cover" => $rij['Cover']];
  array_push($filmLijst, $film);
}
?>
