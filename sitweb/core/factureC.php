<?PHP
include "../../../config.php";
class factureC {
/*function affichercommande ($commande){
		echo "ref_commande: ".$commande->getref_commande()."<br>";
		echo "cin: ".$commande->getcin()."<br>";
		echo "id_panier: ".$commande->getid_panier()."<br>";
		echo "date_limite: ".$commande->getdate_limite()."<br>";
		echo "prix_livraison: ".$commande->getprix_livraison()."<br>";
	}*/

	function ajouterfacture($facture){
	$sql="insert into facture (num,refcommande,datecommande,prixtotal) values (:n,:r,:d,:p)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $num=$facture->getnum();
        $refcommande=$facture->getrefcommande();
        $datecommande=$facture->getdatecommande();
        $prixtotal=$facture->getprixtotal();
		$req->bindValue(':n',$num);
		$req->bindValue(':r',$refcommande);
		$req->bindValue(':d',$datecommande);
		$req->bindValue(':p',$prixtotal);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfacture(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From facture";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfacture($num){
		$sql="DELETE FROM facture where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function modifierfacture($facture,$num){
		$sql="UPDATE facture SET num=:num, refcommande=:refcommande, datecommande=:datecommande, prixtotal=:prixtotal WHERE num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$num=$facture->getnum();
        $refcommande=$facture->getrefcommande();
        $datecommande=$facture->getdatecommande();
        $prixtotal=$facture->prixtotal();
		$datas = array(':refcommande'=>$refcommande, ':cin'=>$cin, ':idpanier'=>$idpanier,':datelimite'=>$datelimite,':prixlivraison'=>$prixlivraison);
		$req->bindValue(':num',$num);
		$req->bindValue(':refcommande',$refcommande);
		$req->bindValue(':datecommande',$datecommande);
		$req->bindValue(':prixtotal',$prixtotal);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererfacture($num){
		$sql="SELECT * from facture where num=$num";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>