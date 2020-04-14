<?php

include ('C:/wamp/www/tameplate/entities/livraison.php');
include ('C:/wamp/www/tameplate\core/livraisonC.php');
$id=$_GET['id'];
$ec= new LivraisonC();
$ec->Supprimerlivraison($id);
header('Location: index-2.php');  
?>