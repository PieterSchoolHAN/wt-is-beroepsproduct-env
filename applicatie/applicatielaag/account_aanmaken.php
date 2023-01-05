<?php
require_once '../datalaag/db_connectie.php';

// Deze functie voegt een nieuwe gebruiker toe aan de database
function registreerGebruiker(array $userAccount){
    if (!isset($dBInfoVerstuurd) && bestaatEmail($userAccount['email'])) {
        $sql = 'INSERT INTO Customer (customer_mail_address, lastname, firstname, payment_method, payment_card_number, contract_type, subscription_start, user_name, password, country_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $inputQuery = maakVerbinding()->prepare($sql);
        $inputQuery->execute(
            [
                trim(htmlspecialchars($userAccount['email'])), 
                trim(htmlspecialchars($userAccount['fname'])), trim(htmlspecialchars($userAccount['lname'])), 
                trim(htmlspecialchars($userAccount['betaalmethode'])),
                trim(htmlspecialchars($userAccount['kaartnummer'])), trim(htmlspecialchars($userAccount['abonnement'])), 
                trim(htmlspecialchars($userAccount['date'])), trim(htmlspecialchars($userAccount['username'])),
                password_hash(trim(htmlspecialchars($userAccount['password'])), PASSWORD_DEFAULT), $userAccount['land']
            ]
        );
        $_SESSION['user'] = $_POST['username'];
        $dBInfoVerstuurd = true;
        unset($_POST);
    }
}

// Deze functie zorgt ervoor dat een gebruiker kan inloggen
function versturenAanmelden()
{
    $verbinding = maakVerbinding();
    $email = htmlspecialchars($_POST['email']);
    $lastname = htmlspecialchars($_POST['lname']);
    $firstname = htmlspecialchars($_POST['fname']);
    $username = htmlspecialchars($_POST['username']);
    $rekeningNummer = htmlspecialchars($_POST['kaartnummer']);
    $betaalmethode = htmlspecialchars($_POST['betaalmethode']);
    $geboortedatum = htmlspecialchars($_POST['date']);
    $land = htmlspecialchars($_POST['land']);
    $abonnement = htmlspecialchars($_POST['abonnement']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);

    $sql = 'INSERT INTO Customer (customer_mail_address,lastname,firstname,
    payment_method,payment_card_number,contract_type,subscription_start
    ,user_name,password, country_name,birth_date) 
    values (?,?,?,?,?,?,?,?,?,?,?)';
    $query = $verbinding->prepare($sql);
    $query->execute([
        $email, $lastname, $firstname,
        $betaalmethode, $rekeningNummer, $abonnement, date("Y/m/d"), $username,
        $password, $land, $geboortedatum
    ]);
    $_SESSION['user'] = $username;
    unset($_POST);
}

// Deze functie checkt of de opgegeven email al bestaat
function bestaatEmail($email){
    $emailCheck = 'SELECT COUNT(customer_mail_address) as email FROM Customer WHERE customer_mail_address = ?';
    $gecheckteQuery = maakVerbinding()->prepare($emailCheck);
    $gecheckteQuery->execute([htmlspecialchars($email)]);
    $resultaat = $gecheckteQuery->fetch();
    $mailRecords = intval($resultaat['email']);
    return $mailRecords === 0; 
}

// Deze functie checkt of de post is geset
function registreerCheck() {
    if (isset($_POST["kaartnummer"])){
        versturenAanmelden();
    }    
}
?>