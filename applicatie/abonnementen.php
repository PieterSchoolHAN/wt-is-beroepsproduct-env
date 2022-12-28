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
    <title>Kies abonnement</title>
</head>
<body>
    <header>
        <nav>
            <ul class="navigatie">
                <li><a href="index.php">
                <img src="images/fletnix.png" title="logo fletnix" alt="logo fletnix"></a></li>                 
            </ul>
        </nav>
    </header> 
    <main>
        <section>
            <h2>Kies je abonnement:</h2>
            
                <div class="abonnement-container"> 
                    <article class="card">
                        <div class="card-header">
                            <h2>Basic</h2>
                        </div>
                        <div class="card-body">
                            <p>Kijk op je tv, computer, mobiele telefoon of tablet in 480p.<br>
                            Prijs per maand: € 5,99</p>
                        </div>
                    </article>
                    <article class="card">
                        <div class="card-header">
                            <h2>Standaard</h2>
                        </div>
                        <div class="card-body">
                            <p>Kijk op twee apparaten tegelijk in 1080p.<br>
                             Prijs per maand: € 7,99</p>
                        </div>
                    </article>
                    <article class=card>
                        <div class="card-header">
                            <h2>Premium</h2>
                        </div>
                        <div class="card-body">
                            <p>Kijk op vier apparaten tegelijk in 4K+HDR.<br>
                         Prijs per maand: € 9,99</p>
                        </div>
                    </article>
                </div>
            <form id="voltooiregistratieknop" action="index.php">
                <input type="submit" value="Registratie voltooien"/>
            </form> 
        </section>
    </main>
    <?php echo genereerFooter(); ?> 
</body>
</html>