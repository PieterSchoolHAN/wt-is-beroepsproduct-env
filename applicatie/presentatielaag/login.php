<?php
session_start();
require_once '../applicatielaag/functies.php';
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
        <?php

        ?>
        <div class="logincontainer">
            <form action="../presentatielaag/fletnix.php" method="POST">
                <h2>Inloggen</h2>
                <label for="email">E-mail:</label>
                <input type="email" placeholder="voorbeeld@fletnix.nl" id="email" name="email" required>
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Log in</button>
            </form>
            <form action="../presentatielaag/fletnix.php" method="POST">
                <h2>Registreren</h2>
                <label for="username">Gebruikersnaam:</label>
                <input type="text" id="username" name="username" required>
                <label for="fname">Voornaam:</label>
                <input type="text" id="fname" name="fname" required>
                <label for="lname">Achternaam:</label>
                <input type="text" id="lname" name="lname" required>
                <label for="date">Geboortedatum:</label>
                <input type="date" id="date" name="date" required>
                <p>Kies je abonnement:</p>
                <div>
                    <input type="radio" id="basic" name="abonnement" value="basic" required>
                    <label for="normal">Basic</label>
                </div>
                <div>
                    <input type="radio" id="premium" name="abonnement" value="premium">
                    <label for="fam">Premium</label>
                </div>
                <div>
                    <input type="radio" id="pro" name="abonnement" value="pro">
                    <label for="fam">Pro</label>
                </div>
                <label for="email2">E-mail:</label>
                <input type="email" placeholder="voorbeeld@fletnix.nl" id="email2" name="email" required>
                <label for="land">Land:</label>
                <select id='land' name='land'>
                    <?php
                    echo genereerLandenDropDown() ?>
                </select>
                <label for="betaalmethode">Betaalmethode:</label>
                <select id='betaalmethode' name='betaalmethode' required>
                    <?php
                    echo genereerBetaalDropDown() ?>
                </select>
                <label for="kaartnummer">Kaartnummer:</label>
                <input type="text" id="kaartnummer" name="kaartnummer" required>
                <label for="password2">Wachtwoord:</label>
                <input type="password" id="password2" name="password" required>
                <button type="submit">Registreer</button>
            </form>
        </div>
    </main>
</body>

</html>