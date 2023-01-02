
<?php require_once "includes/header.php";
require_once "includes/db_connectie.php";
require_once "includes/randomFilm.php";
require_once 'includes/loginhandler.php';
$result = login();
?>

<body>
  <main>
    <div class="text-center">
      <h4>Inloggen</h4>
    </div>

    <form action="login.php" method="post" class="center-div">
        <div>
            <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
            <?php if (isset($result['gebruikersnaam']) && !$result['gebruikersnaam']){
                echo 'Gebruikersnaam en/of wachtwoord is incorrect';
            }?>
        </div>
        <div>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
        </div>
        <div class="center-div mt-text">
            <input class="login-button" type="submit" value="Inloggen">
        </div>
    </form>

    <div class="text-center">
      <h4>Nog geen account?</h4>
    </div>

    <form action="registreren.php" class="center-div" method="post">
      <input class="login-button" type="submit" value="Registreren">
    </form>

    <div class="movie-list">
    <?php
        require "includes/randomFilm.php";
        foreach ($filmLijst as $film) {
            echo '<div class="movie-list-item zoom">
            <a class="no-decoration" href="filmDetail.php?filmCode=' . $film["Movie_ID"] . '"><img src="data/' . $film["Cover"] . 'onerror="this.onerror=null; this.src="data/placeholder.jpg" alt="Film1"><span>' . $film["Titel"] . '</span></a>
            </div>';
        }
        ?>
    </div>
  </main>

<?php 
require_once "includes/footer.php"
?>
</html>