<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fletnix</title>
  <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/stijlen.css">
  <meta charset="UTF-8">
  <meta name="description" content="Netflix ripoff">
  <meta name="keywords" content="Fletnix, Netflix">
  <meta name="author" content="Pieter School">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<header>
        <nav>
        <ul class="navigatie">
            <li><a href="index.php">
            <img src="images/fletnix.png" title="logo fletnix" alt="logo fletnix"></a>
            </li>
            <li class="button mt-text">
            <a href="allefilms.php">Filmaanbod</a>
            </li>
      <?php if(isset($_SESSION['admin']) == 1)
  echo '<li class="button mt-text">
  <a href="filmToevoegen.php">Film Toevoegen</a>
</li>';
    ?>
        <li class="push">
    <?php
    if (isset($_SESSION['gebruiker'])) {
      echo '<div>Welkom, ' . $_SESSION['gebruiker'] . '!</div><div class="mt-text"><a class="button" href="includes/uitloggen.php">Uitloggen</a></div>';
    } else {
      echo '<div><a class="button" href="inloggen.php">Inloggen</a></div>';
    }
    ?>
        </li>
    </ul>
    </nav>
</header>



