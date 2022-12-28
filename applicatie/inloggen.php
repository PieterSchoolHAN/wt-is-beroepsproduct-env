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
    <title>Inloggen</title>
</head>
<body>
<?php echo genereerHeader(); ?>
    <main>
        <section class="inlogmenu">
            <h1>Inloggen</h1>
            <form method="post" action="index.php">
                <div class="tekstvak">
                    <input type="email" required>
                    <span></span>
                    <label>E-mailadres</label>
                </div>
                <div class="tekstvak">
                    <input type="password" required>
                    <span></span>
                    <label>Wachtwoord</label>
                </div>
                <div class="wwvergeten">Wachtwoord vergeten?</div>
                <input type="submit" value="Inloggen">
                <div class="registreer-inloglink">
                    Nieuwe gebruiker? <a href="registreren.php">Registreren</a>
                </div>
            </form>
        </section>
    </main>
    <?php echo genereerFooter(); ?>
</body>
</html>