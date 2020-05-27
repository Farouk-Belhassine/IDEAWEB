<?PHP
include "../../../config.php";
class couponC{

public	function ajoutercoupon($coupon){
	$sql="insert into coupon (num,taux_reduction,valabilite,date_creation) values (:num,:taux_reduction,:valabilite,:date_creation)";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	try{
		$req->bindValue(':num',$coupon->getnum());
		$req->bindValue(':taux_reduction',$coupon->gettaux_reduction());
		$req->bindValue(':valabilite',$coupon->getvalabilite());
		$req->bindValue(':date_creation',$coupon->getdate_creation());
    	$req->execute();
    	return true ;
	}
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
	}
}

function affichercouponA(){
	$sql="SELECT * From coupon";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
	die('Erreur: '.$e->getMessage());
	}
}

function supprimercoupon($num){
	$sql="DELETE FROM coupon where num= :num";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':num',$num);
	try{
		$req->execute();
    }
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
    }
}

function afficherstatcoupon(){
	$sql="SELECT * FROM coupon order by taux_reduction DESC LIMIT 0,8";
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