<?php

function genereerHeader(){
    if (!isset($_SESSION['user'])) {
        $header = '';
        $header .= '<header>';
        $header .= '<nav>';
        $header .= '<ul class="navigatie">';
        $header .= '<li><a href="index.php">';
        $header .= '<img src="images/fletnix.png" title="logo fletnix" alt="logo fletnix"></a></li>';
        $header .= '<li class="push"><a href="inloggen.php">Inloggen</a></li>';  
        $header .= '</ul>';
        $header .= '</nav>';
        $header .= '</header>'; 
    }
    return $header;
}

function genereerFooter(){
    $footer = '';
    $footer .= '<footer>';
    $footer .= '<nav>';
    $footer .= '<ul class="navigatie">';
    $footer .= '<li><p>&copy; Pieter School 2021</p></li>';
    $footer .= '<li class="push"><a href="overons.php">Over ons</a></li>';
    $footer .= '<li><a href="privacyverklaring.php">Privacyverklaring</a></li>';
    $footer .= '</ul>';
    $footer .= '</nav>';
    $footer .= '</footer>';  
    
    return $footer;
}
?>
