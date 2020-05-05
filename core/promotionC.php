<?PHP
include 'D:/apps/wamp64/www/sitweb/config.php';
class promotionC {

public	function ajouterpromotion($promotion){
		$sql="insert into promotion (id_produit,duree,reduction) values (:id_produit,:duree,:reduction)";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
		$req->bindValue(':id_produit',$promotion->getid_produit());
		$req->bindValue(':duree',$promotion->getduree());
		$req->bindValue(':reduction',$promotion->getreduction());

        $req->execute();
         return true ;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        } 
		
	}


	function afficherpromotion(){
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerpromotion($id_produit){
		$sql="DELETE FROM promotion where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierpromotion($promotion,$id_produit){
		$sql="UPDATE promotion SET id_produit=:id_produit, duree=:duree, reduction=:reduction WHERE id_produit=:id_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		/*$id_produit=$promotion->getid_produit();
        $durre=$promotion->getduree();
        $reduction=$promotion->getreduction();*/
		$datas = array(':id_produit'=>$id_produit, ':duree'=>$duree, ':reduction'=>$reduction);
		/*$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':reduction',$reduction);
		$req->bindValue(':duree',$duree); */

		$req->bindValue(':id_produit',$promotion->getid_produit());
		$req->bindValue(':duree',$promotion->getduree());
		$req->bindValue(':reduction',$promotion->getreduction());
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpromotion($id_produit){
		$sql="SELECT * from promotion where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


		function afficherjoint(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT  promotion.id_produit,promotion.duree,promotion.reduction,produit.Sexe,produit.Prix,produit.quantite,produit.urlImage,produit.Taille FROM promotion,produit WHERE promotion.id_produit=produit.idproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

			function afficherjoint2(){

		//$sql="SELECT * FROM produit FULL JOIN promotion ON promotion.id_produit=produit.idproduit ";
		//$sql="SElECT * From produit";
		$sql="SELECT *
FROM produit
LEFT JOIN promotion ON produit.idproduit = promotion.id_produit
WHERE promotion.id_produit IS NULL"; 
   
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherjoint3(){
	//$sql="SELECT * FROM produit RIGHT JOIN categoire ON produit.idproduit = categoire.ID_categorie WHERE produit.idproduit IS NULL";
    $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.idproduit";
    //$sql="SELECT *FROM produit RIGHT JOIN categoire ON produit.idproduit = categoire.ID_categorie WHERE categoire.ID_categorie IS NULL";
   
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