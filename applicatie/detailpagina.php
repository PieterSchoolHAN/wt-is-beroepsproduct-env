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
    <link rel="stylesheet" href="css/stijlen.css">
    <title>Document</title>
</head>
<body>
    <?php echo genereerHeader(); ?>
    <main>
        <section>
            <h1>Chef(2014)</h1>
            <img class="coverimage" src="images/chef.jpg" title="filmposter chef" alt="filmposter chef">
            <h2>Speelduur:</h2>
            <p>1 uur en 14 minuten</p>
            <h2>Regisseur:</h2>
            <p>Jon Favreau</p>
            <h2>Genres</h2>
            <p>Avontuur, Comedy</p>
        </section>
        <section>
            <h2>Beschrijving</h2>
            <p id="beschrijving">
                Chef-kok Carl Casper (Jon Favreau) neemt plotseling ontslag bij een prominent restaurant in Los Angeles.
                Hij vertrekt naar Miami en met de hulp van zijn ex-vrouw (Sofia Vergara), beste vriend (John Leguizamo) en zoontje (Emjay Anthony) knapt hij een oude food truck op en begint hij zijn eigen restaurant op wielen.
                Tijdens een culinaire road trip met zijn vrienden en familie herontdekt Carl zijn creativiteit en passie voor koken, leven en liefde.
            </p>

            <h2>Hoofdrollen</h2>
            <p> Jon Favreau als Carl Casper<br>
                Sofía Vergara als Inez<br>
                Emjay Anthony als Percy<br>
                Scarlett Johansson als Molly<br>
                Robert Downey Jr. als Marvin
                </p>

            <h2>Trailer</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FF_rYNupPwg" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </section>
    </main>
    <?php echo genereerFooter(); ?>
</body>
</html>