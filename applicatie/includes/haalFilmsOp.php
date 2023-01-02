<?php

$db = maakVerbinding();

$query = $db->prepare("select movie_id as Movie_ID, title as Titel, cover_image as Cover from Movie");

$data = $query->execute();

$filmLijst = array();

while ($rij = $query->fetch()) {
    $film = ["Movie_ID" => $rij['Movie_ID'], "Titel" => $rij['Titel'], "Cover" => $rij['Cover']];
    array_push($filmLijst, $film);
}
?>