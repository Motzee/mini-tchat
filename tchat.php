<?php session_start(); ?>

<!DOCTYPE html>

<html lang="fr">
<?php
    require_once("templates/head.html") ;
    
    require_once("c_imports.php") ;

?>
<body>
<?php
    //affichage d'un cadre de tchat
    include_once("templates/v_tchat.php") ;

?>
</body> 
</html>