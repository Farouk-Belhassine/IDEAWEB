<?php

include ('C:/wamp/www/tameplate/entities/livreur.php');
include ('C:/wamp/www/tameplate\core/livreurC.php');
$log=$_GET['login'];
$ec= new livreurC();
$ec->Supprimerlivreur($log);
header('Location: livreur.php');  
?>