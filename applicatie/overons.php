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
    <title>Over ons</title>
</head>
<body>
    <?php echo genereerHeader(); ?>
    <main>
        <section>
            <h1>Over ons</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra cursus orci aliquam condimentum. In hac habitasse platea dictumst. Sed congue dignissim commodo. In ornare sit amet tortor vel volutpat. Aenean condimentum ligula ut dictum mollis. Suspendisse potenti. Sed luctus euismod arcu sit amet ornare. Phasellus fermentum urna quis feugiat aliquet. Nulla volutpat risus tempor mi ullamcorper scelerisque. Nulla eu tincidunt odio, et faucibus nisl. Morbi tempus ipsum imperdiet leo ultricies semper. Pellentesque scelerisque nunc tellus, ac fringilla nisl interdum id. Proin sed pharetra tellus.</p>
        </section>
        <section>
            <h2>Contact</h2>
            <ul class="contactgegevens">
                <li>E-mail: info@fletnix.com </li>
                <li>Tel: 088-1234567 </li>
                <li>Adres: Adres 123 1234AB Plaatsnaam</li>
            </ul>
        </section>
    </main>
    <?php echo genereerFooter(); ?> 
</body>
</html>