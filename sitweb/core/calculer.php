<?php   
include "../../config.php";
class calculer
{
function livreur()
{
    $db = config::getConnexion();
    $sql="SELECT COUNT(cin) as nb FROM livreur";

try{
$req=$db->prepare($sql);
$req->execute();
$nb= $req->fetchColumn();
return $nb;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}  


}
function livraion()
{
    $db = config::getConnexion();
    $sql="SELECT COUNT(*) as nb FROM livrasion ";

try{
$req=$db->prepare($sql);
$req->execute();
$nb= $req->fetchColumn();
return $nb;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}  


}
function compte()
{
    $db = config::getConnexion();
    $sql="SELECT COUNT(*) as nb FROM livreur";

try{
$req=$db->prepare($sql);
$req->execute();
$nb= $req->fetchColumn();
return $nb;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}  


}
function produit()
{
    $db = config::getConnexion();
    $sql="SELECT COUNT(*) as nb FROM produit";

try{
$req=$db->prepare($sql);
$req->execute();
$nb= $req->fetchColumn();
return $nb;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}  


}
}
?>