<?php
//haal jaren op//
$db = maakVerbinding();

$query = 'select publication_year from Movie group by publication_year';

$data = $db->query($query);

$jaren = array();

while ($rij = $data->fetch()) {
    array_push($jaren, $rij['publication_year']);
}

//haal genres op//
$db = maakVerbinding();

$query = 'select g.genre_name, count(mg.movie_id) from genre g join Movie_Genre mg on g.genre_name = mg.genre_name
group by g.genre_name having count(mg.movie_id) > 0';

$data = $db->query($query);

$genres = array();

while ($rij = $data->fetch()) {
    array_push($genres, $rij['genre_name']);
}
?>
