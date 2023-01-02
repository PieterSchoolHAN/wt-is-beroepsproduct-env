<?php
require_once 'user.php';
function login(){

    if(!isset($_POST['gebruikersnaam']) || !isset($_POST['wachtwoord'])){
        return; 
    }

    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    $user = getUser($gebruikersnaam);


    if($user && password_verify($wachtwoord, $user['password'])){
        // Login is correct
        

        // Store session
        $_SESSION['gebruiker'] = $gebruikersnaam;

        // Naar filmpagina
        header('Location: /index.php');
    }

    else {
        // Login isn't correct
        return ['gebruikersnaam' => false, 'wachtwoord'=> false];
        echo 'mislukt';
        header('location: index.php');
    }


}

function logout(){
    session_start();
    session_destroy();
    header('Location: /');
}

function getLoggedInUser(){
    session_start();
    return $_SESSION['gebruiker'];
}
?>
