<?PHP
include "D:/apps/wamp64/www/sitweb/config.php";
class panierC{

public function ajouterpanier($panier,$quantite,$prixtotal){
	$sql="insert into panier (idproduit,quantite,prixtotal) values (:idproduit,:quantite,:prixtotal)";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	try{
		$req->bindValue(':idproduit',$panier->getidproduit());
		$req->bindValue(':quantite',$panier->getquantite());
		$req->bindValue(':prixtotal',$panier->getprixtotal());
    	$req->execute();
    	return true ;
	}
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
	}
}

function quantiteitem($idproduit){
	$sql="SELECT quantite FROM panier where idproduit=$idproduit";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		if($liste->rowCount()>0){
			foreach ($liste as $row){
				$ne=$row[0];
				$nombreitem=(int)$ne;
				return $nombreitem;
			}
		}
		else return 0;
    }
    catch (Exception $e){
	echo 'Erreur: '.$e->getMessage();
	}
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
	$sql="DELETE FROM panier where idproduit = :idproduit";
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
	$sql="SELECT SUM(prixtotal) FROM panier";
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

function recherchecoupon($num){
	if(is_numeric($num)){
		$sql="SELECT * FROM coupon where num=$num";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
    	}
    	catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}
	}
	else return "empty";
}

function prixitem($idproduit){
	$sql="SELECT * from produit where idproduit=$idproduit";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		foreach ($liste as $row) $prix=$row[3];
		return $prix;
	}
	catch (Exception $e){
	die('Erreur: '.$e->getMessage());
	}
}

}
?>