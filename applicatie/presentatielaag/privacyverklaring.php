<?php
session_start();
require_once '../applicatielaag/functies.php';
require_once '../applicatielaag/privacyfuncties.php';
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
        echo genereerPrivacyverklaring();
        ?>
    </main>
</body>

</html>