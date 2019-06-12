<?php

/**
 * Permet de sécuriser une châine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Débug plus lisible
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * Permet de vérifier si l'utilisateur et bien connecté
 */

function isConnected(){

    if(isset($_SESSION['isConnected']) && $_SESSION['isConnected']==true){
        return true;
    } else{
        return false;
    }
}