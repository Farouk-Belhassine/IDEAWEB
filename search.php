<?php
include ('C:/xampp/htdocs/siteweb/entities/compte.php');
include ('C:/xampp/htdocs/siteweb/core/compteC.php');
$search_value=$_GET["search"];
$cC=new compteC();
$mylist=$cC->recherche($search_value);

       

?>