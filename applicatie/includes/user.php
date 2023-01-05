<?php
require_once 'db_connectie.php';
function getUser($gebruikersnaam)
{
    $verbinding = maakVerbinding();
    //Customer
    //user_name, password
    $query = $verbinding->prepare("SELECT user_name, password FROM CUSTOMER WHERE user_name = :gebruikersnaam");
    //SELECT user_name, password FROM CUSTOMER WHERE user_name = Pjiter
    $query->execute([':gebruikersnaam' => $gebruikersnaam]);
    return $query->fetch();
}
?>