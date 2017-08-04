<?php session_start(); ?>

<!DOCTYPE html>

<html lang="fr">
<?php
    require_once("templates/head.html") ;
    
    require_once("c_imports.php") ;

?>
<body>
<?php
    //cadre de connexion/création de compte/sélection de salon
    include_once("templates/v_index.php") ;
    
    //infos légales
    include_once("templates/footer.html") ;

?>
</body> 
</html>