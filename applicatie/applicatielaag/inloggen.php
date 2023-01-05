<?php
require_once '../datalaag/db_connectie.php';
require_once '../datalaag/db_functies.php';

// Deze functie controleert of de gebruiker de juiste gegevens heeft ingevuld bij het inloggen
function inloggenControleren() {
    $verbinding = maakVerbinding();
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = 'SELECT customer_mail_address, password
            from Customer
            where  customer_mail_address = ?';
    $query = $verbinding->prepare($sql);
    $query->execute([$email]);
    $resultaat = $query->fetch();
    
    if(isset($resultaat["customer_mail_address"]) && password_verify($password, $resultaat["password"])) {
        return true;
    }

    elseif(!isset($resultaat["customer_mail_address"])) {
        return false;
        
    }
    elseif(isset($resultaat["customer_mail_address"]) && password_verify($password, $resultaat["password"]) == false) {
        return false;
    }
}

// Deze functie controleert of de gebruiker een admin is
function controlerenAdmin(){
$verbinding = maakVerbinding();
$email = $_POST["email"];
$sql = 'SELECT admin
        from Customer
        where  customer_mail_address = ?';
$query = $verbinding->prepare($sql);
$query->execute([$email]);
$resultaat = $query->fetch();
if ($resultaat['admin'] == true){
    return true;
}
else{
    return false;
}
}

// Deze functie stuurt een admin direct door naar de beheerpagina
function controlerenBeheer(){
    if ($_SESSION['admin'] == false){
        header('location: ../presentatielaag/fletnix.php');
    }
}

// Deze functie zorgt ervoor dat een gebruiker of admin kan inloggen
function inloggen() {
    if (inloggenControleren() == true) {
        $_SESSION["user"] = ophalenGebruikersnaam();
        if (controlerenAdmin() == true){
            $_SESSION['admin'] = true;
            header('location: ../presentatielaag/beheerpagina.php');  
        }

    }
    elseif (inloggenControleren() == false) {
        echo 'Inloggen mislukt';
    }unset($_POST);
   
}

// Deze functie haalt gegevens van de gebruiker op uit de database
function haalGegevensOp($email, $gegevens) {
    $connectie = maakVerbinding();
    if ($gegevens === 'name') {
        $sql = 'SELECT customer_mail_address, contract_type, user_name FROM Customer WHERE customer_mail_address=?';
        $naamquery = $connectie->prepare($sql);
        $naamquery->execute([$email]);
        $resultaat = $naamquery->fetch();
        return $resultaat['user_name'];
    } elseif ($gegevens === 'password') {
        $sql = 'SELECT customer_mail_address, contract_type, user_name, password FROM Customer WHERE customer_mail_address=?';
        $wachtwoordQuery = $connectie->prepare($sql);
        $wachtwoordQuery->execute([$email]);
        $resultaat = $wachtwoordQuery->fetch();
        return $resultaat['password'];
    } else {
        return 'FOUT';
    }
}

// Deze functie zorgt ervoor dat een gebruiker kan uitloggen
function uitloggen() {
    if (isset($_GET['ingelogd']) && $_GET['ingelogd'] === 'false' && isset($_SESSION)){
        unset($_POST);
        unset($_SESSION);
        session_unset();
        session_destroy();
        header('location: ../presentatielaag/fletnix.php');
    }
}

// Deze functie laat een bericht weergeven op het scherm bij een succesvolle login
function loginBericht() {
    if (isset($_SESSION["user"])){
        echo 'Je bent ingelogd';
    }
}

// Deze functie onderscheidt inloggen en registreren (als het kaartnummer niet is geset, gaat het dus om inloggen)
function loginCheck() {
    if (isset($_POST["email"]) && !isset($_POST["kaartnummer"])) {
        inloggen();
    }
}