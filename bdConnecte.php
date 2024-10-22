<?php
   try{
    $bd = new PDO("mysql:host=localhost;dbname=dbconnexion;charset=utf8","root","",[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);
   }
   catch(PDOException $e){
    die("Erreur connexion : ".$e->getMessage());
   }

?>