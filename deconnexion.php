<?php
session_start();
try{
    session_unset();// vide les variables 
    session_destroy();//detruit laa session 
    header("Location:home.php");
}
catch(Exception $ee ){
    die("Erreur de deconnxion : ".$ee->getMessage());
}


?>