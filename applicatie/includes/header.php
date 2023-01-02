<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fletnix</title>
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="UTF-8">
  <meta name="description" content="Netflix ripoff">
  <meta name="keywords" content="Fletnix, Netflix">
  <meta name="author" content="Pieter School">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
  <div class="no-decoration">
    <ul>
      <li class="button mt-text">
        <a href="filmaanbod.php">Filmaanbod</a>
      </li>
    </ul>
  </div>

  <div class="center-logo">
    <a href="index.php"> <img src="images/fletnix-logo.png" alt="Fletnix Logo"></a>
  </div>
  <div class="no-decoration">
    <?php
    if (isset($_SESSION['gebruiker'])) {
      echo '<div >Welkom, ' . $_SESSION['gebruiker'] . '!</div><div class="mt-text"><a class="button" href="includes/logout.php">Uitloggen</a></div>';
    } else {
      echo '<div><a class="button" href="login.php">Inloggen/Registreren</a></div>';
    }
    ?>
    <div class="no-decoration">
      <div class="mt-text searchbar">
        <form action="filmaanbod.php" method="get">
          <input type="text" name="zoekterm" placeholder="Zoeken..." />
        </form>
      </div>
    </div>
  </div>
  </header>