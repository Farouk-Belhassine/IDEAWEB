<?PHP
include "D:/apps/wamp64/www/sitweb/config.php";
class panierC{

public	function ajouterpanier($panier,$quantite){
	$sql="insert into panier (idproduit,quantite) values (:idproduit,:quantite)";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	try{
		$req->bindValue(':idproduit',$panier->getidproduit());
		$req->bindValue(':quantite',$panier->getquantite());
    	$req->execute();
    	return true ;
	}
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
	}
}

function afficherpanier($idproduit,$quantite){
	echo "idproduit: ".$idproduit->getidproduit()."<br>";
	echo "quantite: ".$quantite->getquantite()."<br>";
}

function afficherpanierA(){
	$sql="SELECT * from `produit` INNER JOIN panier
        ON panier.idproduit = 
           produit.idproduit";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
	die('Erreur: '.$e->getMessage());
	}
}

function supprimerpanier($idproduit){
	$sql="DELETE FROM panier where idproduit= :idproduit";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':idproduit',$idproduit);
	try{
		$req->execute();
    }
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
    }
}

function totalpanier(){
	$sql="SELECT SUM(Prix) FROM `produit` INNER JOIN panier
        ON panier.idproduit = 
           produit.idproduit";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		if ($liste) return $liste;
		else return 0;
	}
	catch (Exception $e){
	die('Erreur: '.$e->getMessage());
	}
}

function nombreitem(){
	$sql="SELECT SUM(quantite) FROM `panier`";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
	die('Erreur: '.$e->getMessage());
	}
}

}
?>