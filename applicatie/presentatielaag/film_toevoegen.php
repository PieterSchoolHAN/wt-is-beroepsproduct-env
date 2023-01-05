<?php
session_start();
require_once '../applicatielaag/functies.php';
require_once '../applicatielaag/inloggen.php';
controlerenBeheer();


?>

<!DOCTYPE html>
<html lang="nl">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fletnix</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="icon" href="favicon.png">
</head>

<body>
     <header>
          <?php
          echo genereerNavBar();


          ?>
     </header>
     <main>
          <div class="beheercontainer">
               <div class="filmtoevoegen">
                    <a href="beheerpagina.php">
                         <h3>Terug naar beheerpagina</h3>
                    </a>
                    <a href="film_toevoegen.php">
                         <h1>Film toevoegen</h1>
                    </a>
               </div>
               <div class="filminfo">
                    <?php
                    echo genereerFilmToevoegForm();
                    ?>
               </div>
          </div>
     </main>
</body>

</html>

</html>