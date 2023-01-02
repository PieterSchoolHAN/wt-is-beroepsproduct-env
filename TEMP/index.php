<?php

include_once 'applicatielaag/algemeneFuncties.php';
 
session_start();
//uitloggen();   
//gebruikerVerwijderen();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stijlen.css">
    <title>Fletnix</title>
</head>
<body>
    <?php echo genereerHeader(); ?>

    <main>
        <section id="topproduct">
            <h1>Topproduct</h1>
            <a href="detailpagina.php">
            <article id="topproduct-container">
                <div>
                    <h2>Chef(2014)</h2>
                    <p>Chef-kok Carl Casper neemt plotseling ontslag bij een prominent restaurant in Los Angeles.
                    Hij vertrekt naar Miami en met de hulp van zijn ex-vrouw, beste vriend en zoontje knapt hij een oude food truck op en begint hij zijn eigen restaurant op wielen.</p>
                </div>
                <img src="images/chef-movie-2.jpg" title="Chef" alt="poster Chef">
            </article></a> 
        </section>

        <section>
            <h3>Uitgelicht</h3>
            <ul class="uitgelicht">
                <li>
                    <a href="detailpagina.php">  
                    <img class="filmposter" src="images/chef-movie-2.jpg" title="chef" alt="film1">
                    </a>
                </li>
                <li>
                    <a href="#">  
                    <img class="filmposter" src="images/The-Maze-Runner-Launch-Quad.jpg" title="mazerunner" alt="film2">
                    </a>
                </li>
                <li>
                    <a href="#">  
                    <img class="filmposter" src="images/Harry_Potter_and_the_Philosopher's_Stone_banner.jpg" title="harrypotter" alt="film3">
                    </a>
                </li>
                <li>
                    <a href="#">  
                    <img class="filmposter" src="images/suicidesquad.jpg" title="suicidesquad" alt="film4">
                    </a>
                </li>
                <li>
                    <a href="#">  
                    <img class="filmposter" src="images/nowyouseeme.jpg" title="Now you see me 2" alt="film4">
                    </a>
                </li>
                <li>
                    <a href="allefilms.php">Alle films ⇨</a>
                </li>
            </ul>
        </section>
    </main>
    <?php echo genereerFooter(); ?>  
</body>
</html>

