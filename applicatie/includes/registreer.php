<?php

require_once "db_connectie.php";

$gegevens = array(
    "uname" => $_POST["uname"],
    "email" => $_POST["email"],
    "pword" => password_hash($_POST["pword"], PASSWORD_DEFAULT),
    "geslacht" => $_POST["geslacht"],
    "voornaam" => $_POST["voornaam"],
    "achternaam" => $_POST["achternaam"],
    "geboortedatum" => $_POST["geboortedatum"],
    "land" => $_POST["land"],
    "abonnementstype" => $_POST["abonnementstype"],
    "betaalmethode" => $_POST["betaalmethode"],
    "kaartnummer" => $_POST["kaartnummer"],
    "startabbo" => date("Y-m-d"),
    "eindeabbo" => NULL
);

function registreerGebruiker($gegevens)
{
    $verbinding = maakVerbinding();
    $query = $verbinding->prepare("INSERT INTO Customer VALUES (:email, :achternaam, :voornaam, :betaalmethode, :kaartnummer, :abonnementstype, :startabbo, :eindeabbo, :uname, :pword, :land, :geslacht, :geboortedatum)");
    $query->execute([':email' => $gegevens['email'], ':achternaam' => $gegevens['achternaam'], ':voornaam' => $gegevens['voornaam'], ':betaalmethode' => $gegevens['betaalmethode'], ':kaartnummer' => $gegevens['kaartnummer'], ':abonnementstype' => $gegevens['abonnementstype'], ':startabbo' => $gegevens['startabbo'], ':eindeabbo' => $gegevens['eindeabbo'], ':uname' => $gegevens['uname'], ':pword' => $gegevens['pword'], ':land' => $gegevens['land'], ':geslacht' => $gegevens['geslacht'], ':geboortedatum' => $gegevens['geboortedatum']]);
    return true;
}

if (registreerGebruiker($gegevens)) {
    session_start();
    $_SESSION['gebruiker'] = $gegevens["uname"];

    header('Location: /filmaanbod.php');
}
?>
