<?php

$db = maakVerbinding();

$query = $db->prepare("select title as Titel, description as Beschrijving, genre_name as Genre, duration as Duur, publication_year as Jaar, cover_image as Cover, URL as Trailer, PS.lastname as Achternaam, PS.firstname as Voornaam, PD.lastname as achternaamDirector, PD.firstname voornaamDirector
from Movie M
inner join Movie_Genre MG on M.movie_id = MG.movie_id
inner join Movie_Cast MC on MC.movie_id = M.movie_id
inner join Movie_Director MD on MD.movie_id = M.movie_id
inner join Person PS on PS.person_id = MC.person_id
inner join Person PD on PD.person_id = MD.person_id
where M.movie_id = :movie_id");

$data = $query->execute([':movie_id' => $filmCode]);

while ($rij = $query->fetch()) {
    $film = ["Titel" => $rij['Titel'], "Cover" => $rij['Cover'], "Duur" => $rij['Duur'], "Jaar" => $rij['Jaar'], "Genre" => $rij['Genre'], "Beschrijving" => $rij['Beschrijving'], "RegisseurVN" => $rij['voornaamDirector'], "RegisseurAN" => $rij['achternaamDirector'], "ActorVN" => $rij['Voornaam'], "ActorAN" => $rij['Achternaam'], "Trailer" => $rij['Trailer']];
}
?>