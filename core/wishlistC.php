<?PHP
include "D:/apps/wamp64/www/sitweb/config.php";
class wishlistC{

public function ajouterwishlist($wishlist){
	$sql="insert into wishlist (idproduit,cin_client) values (:idproduit,:cin_client)";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	try{
		$req->bindValue(':idproduit',$wishlist->getidproduit());
		$req->bindValue(':cin_client',$wishlist->getcinclient());
    	$req->execute();
    	return true;
	}
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
	}
}


function afficherwishlist($cin){
	$sql="SELECT * from `produit` INNER JOIN wishlist ON wishlist.idproduit = produit.idproduit where wishlist.cin_client=$cin";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
	die('Erreur: '.$e->getMessage());
	}
}

function supprimerwishlist($idproduit,$cin){
	$sql="DELETE FROM wishlist where (idproduit = :idproduit AND cin_client = :cin_client)";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':idproduit',$idproduit);
	$req->bindValue(':cin_client',$cin);
	try{
		$req->execute();
    }
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
    }
}

function produitverifexist($idproduit,$cin){
	$sql="SELECT * FROM wishlist where (idproduit=$idproduit and cin_client=$cin)";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		if($liste->rowCount()>0) return 1;
		else return 0;
    }
    catch (Exception $e){
	echo 'Erreur: '.$e->getMessage();
	}
}

}
?>