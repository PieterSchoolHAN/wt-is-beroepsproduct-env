<?php

include_once 'applicatielaag/algemeneFuncties.php';
 
session_start();
//uitloggen();   
//gebruikerVerwijderen();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stijlen.css">
    <title>Alle mediaproducten</title>
</head>
<body>
    <?php echo genereerHeader(); ?>
    <main>
    <section>
        <h1>Alle mediaproducten</h1>
        <div class="zoekbalk">
            <input type="text" placeholder="Zoek naar films..">
            <button type="submit"><i class="fa fa-search"></i></button>
        
        <form action="#">
            <label for="genre">Filter op genre:</label>
            <select name="genre" id="genre">
              <option value="actie">Actie</option>
              <option value="avontuur">Avontuur</option>
              <option value="comedy">Comedy</option>
              <option value="sci-fi">Sci-fi</option>
            </select>
        </form>
        </div>
      <br>  
        <div class="filmgrid">
            <figure>
                <a href="detailpagina.php">
                <img class="filmposter" src="images/chef-movie-2.jpg" alt="Movie"></a>
            </figure>

            <figure>
                <img class="filmposter" src="images/The-Maze-Runner-Launch-Quad.jpg" title="mazerunner" alt="film2">
            </figure>

            <figure>
                <img class="filmposter" src="images/Harry_Potter_and_the_Philosopher's_Stone_banner.jpg" title="harrypotter" alt="film3">
            </figure>

            <figure>
                <img class="filmposter" src="images/suicidesquad.jpg" title="suicidesquad" alt="film4">
            </figure>

            <figure>
                <img class="filmposter" src="images/nowyouseeme.jpg" title="Now you see me 2" alt="film4">
            </figure>
            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>

            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>

            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>

            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>

            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>

            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>

            <figure>
                <img class="filmposter" src="images/250x150.png" alt="Movie">
            </figure>
        </div>
    </section>
    </main>
    <?php echo genereerFooter(); ?>
</body>
</html>