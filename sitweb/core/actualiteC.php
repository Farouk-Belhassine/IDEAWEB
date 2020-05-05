<?PHP
include 'D:/apps/wamp64/www/sitweb/config.php';
class actualiteC {

public	function ajouteractualite($actualite){
		$sql="insert into actualite (nouv_produits,type,duree,titre) values (:nouv_produits,:type,:duree,:titre)";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
		$req->bindValue(':nouv_produits',$actualite->getnouv_produits());
		$req->bindValue(':type',$actualite->gettype());
		$req->bindValue(':duree',$actualite->getduree()); 
		$req->bindValue(':titre',$actualite->gettitre()); 

        $req->execute();
         return true ;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        } 
		
	}





	function ajouteractualite1($actualite){
		$sql="insert into actualite (nouv_produits,type,duree,titre) values ('12', 'adulte', '16 jours','nouveau' )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req->execute();
         return true ;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        } 
		
	}	
	
 function afficheractualite ($actualite){
		echo "nouv_produits: ".$actualite->getnouv_produits()."<br>";
		echo "type: ".$actualite->gettype()."<br>";
		echo "titre: ".$actualite->gettitre()."<br>";
		echo "durée: ".$actualite->getdurée()."<br>";
	}

	function afficheractualiteA(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From actualite";
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
		$sql="SElECT  actualite.nouv_produits,actualite.duree,produit.Libelle,produit.Sexe,produit.Prix,produit.quantite,produit.urlImage FROM actualite,produit WHERE actualite.nouv_produits=produit.idproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}





	function supprimeractualite($type){
		$sql="DELETE FROM actualite where type= :type";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':type',$type);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifieractualite($actualite,$nouv_produits){
		$sql="UPDATE actualite SET nouv_produits=:nouv_produits, type=:type, duree=:duree, titre=:titre WHERE nouv_produits=:nouv_produits";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nouv_produits=$actualite->getnouv_produits();
        $type=$actualite->gettype();
        $titre=$actualite->gettitre();
        $duree=$actualite->getduree();
		$datas = array(':nouv_produits'=>$nouv_produits, ':type'=>$type, ':nom'=>$nom,':duree'=>$duree,':titre'=>$titre);
		$req->bindValue(':nouv_produits',$nouv_produits);
		$req->bindValue(':type',$type);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':duree',$duree);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereractualite($nouv_produits){
		$sql="SELECT * from actualite where nouv_produits=$nouv_produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function rechercheactualite($search_value){
        $db = config::getConnexion();
            $sql="select * from actualite where nouv_produits like '%$search_value%' or type like '%$search_value%' or duree like '%$search_value%' or titre like '%$search_value%' ";
        try{
        $req=$db->prepare($sql);
        $req->execute();
        $actualite= $req->fetchALL();
        return $actualite;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
} 
function rechercherListeactualite($nouv_produits){
		$sql="SELECT * from actualite where nouv_produits=$nouv_produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
	}

function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
       $db = config::getConnexion();
            $sql="SElECT * From actualite ORDER BY type";
        try{
        $req=$db->prepare($sql);
        $req->execute();
        $actualite= $req->fetchALL(PDO::FETCH_OBJ);
        return $actualite;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
	/*
	function rechercherListeactualite($type){
		$sql="SELECT * from employe where type=$type";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
	} */  
}
}
?>