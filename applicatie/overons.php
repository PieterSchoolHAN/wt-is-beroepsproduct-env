<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="mystyle.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Over ons - Fletnix</title>
</head>

<body>
<?php require_once "includes/header.php";
  ?>

  <main>
    <div>
      <h1 class="text-center">Over ons:</h1>
      <p class="text-center">
        Fletnix is een streamingdienst gemaakt voor studenten, waar iedereen voor een nette prijs films en series kan
        kijken. Met een grote selectie aan films speciaal geselecteerd voor studenten is er altijd wel wat leuks op de
        website te vinden.
        Er zijn 3 verschillende abbonementen beschikbaar: Basic, Premium en Pro. Bekijk hieronder de prijzen en de
        specificaties voor elk abonnementstype.
      </p>
      <h2 class="text-center mt-100">Basic: Onbeperkt films en series bekijken op 1 apparaat.
        Kwaliteit: 1080p full HD.
      </h2>
      <h3 class="text-center">
        9,99 per maand.
      </h3>
      <h2 class="text-center">
        Premium (Meest gekozen!): Onbeperkt films en series kijken op 3 apparaten.
        Kwaliteit: 1080p full HD.
      </h2>
      <h3 class="text-center">
        11,99 per maand.
      </h3>
      <h2 class="text-center">
        Pro: Onbeperkt films en series kijken op 4 apparaten.
        Kwaliteit: 4K Ultra HD.
      </h2>
      <h3 class="text-center">
        13,99 per maand.
      </h3>

      <div class="center-div text-center">
        <h1>Interesse?</h1>
        <form action="registreren.php" class="center-div">
          <input class="login-button" type="submit" value="Registreer">
        </form>
      </div>

    </div>
  </main>
  <?php 
require_once "includes/footer.php"
?>
</body>