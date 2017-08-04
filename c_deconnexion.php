<?php

session_start();

require_once("c_imports.php") ;

if(!isset($_SESSION['id'])) {
    echo "Erreur : aucune personne ne semble connectée" ;
    exit(1) ;
} else {
    $user->deconnexion() ;
    header('Location: index.php');
    exit(0) ;
}