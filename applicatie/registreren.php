<?php require_once "includes/header.php";
require_once "includes/db_connectie.php";
require_once "includes/randomFilm.php";
?>

<body>
  <main>
    <div class="center-div">
      <form action="includes/registreer.php" class="center-div" method="post">
        <div>
          <h1>Registreren</h1>
        </div>
        <div class="mt-text"><label for="email">E-mailadres*:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="mt-text"><label for="uname">Gebruikersnaam*:</label>
          <input type="text" id="uname" name="uname" required>
        </div>
        <div class="mt-text"><label for="pword">Wachtwoord*:</label>
          <input type="password" id="pword" name="pword" required>
        </div>

        <div class="mt-text">
          <label for="geslacht">Geslacht:</label>
          <select name="geslacht" id="">
            <option value="m">Man</option>
            <option value="v">Vrouw</option>
          </select>
        </div>
        <div class="mt-text"><label for="voornaam">Voornaam*:</label>
          <input type="text" id="voornaam" name="voornaam" required>
        </div>
        <div class="mt-text"><label for="achternaam">Achternaam*:</label>
          <input type="text" id="achternaam" name="achternaam" required>
        </div>
        <div class="mt-text"><label for="geboortedatum">Geboortedatum*:</label>
          <input type="date" id="geboortedatum" name="geboortedatum" required>
        </div>
        <div class="mt-text">
          <label for="land">Land:</label>
          <select name="land" id="">
            <option disabled selected value> Kies een land </option>
            <option value="Netherlands">Nederland</option>
            <option value="Belgium">Belgie</option>
            <option value="Germany">Duitsland</option>
          </select>
        </div>

        <div class="mt-text"><label for="abonnementstype">Abonnement:</label>
          <select id="abonnementstype" name="abonnementstype" required>
            <option disabled selected value> Kies een abonnement </option>
            <option value="Basic">Basic</option>
            <option value="Premium">Premium</option>
            <option value="Pro">Pro</option>
          </select>

          <div class="mt-text">
            <label for="betaalmethode">Betaalmethode:</label>
            <select name="betaalmethode" id="">
              <option disabled selected value> Kies een betaalmethode </option>
              <option value="Amex">Amex</option>
              <option value="MasterCard">MasterCard</option>
              <option value="Visa">Visa</option>
            </select>
          </div>
          <div class="mt-text"><label for="kaartnummer">Kaartnummer*:</label>
            <input type="text" id="kaartnummer" name="kaartnummer" required>
          </div>

          <div class="mt-text">
            <input type="checkbox" required> Ik ga akkoord met de Privacyvoorwaarden*
          </div>

          <div class="mt-text"><input type="submit" name="registreer" value="Registreer"></div>
      </form>
    </div>
    <div class="movie-list mt-100">
      <?php
      foreach ($filmLijst as $film) {
        echo '<div class="movie-list-item zoom">
          <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . '" alt="Film1"><span>' . $film["Titel"] . '</span></a>
        </div>';
      }
      ?>
    </div>
  </main>

  <?php
  require_once "includes/footer.php"
  ?>
</body>

</html>