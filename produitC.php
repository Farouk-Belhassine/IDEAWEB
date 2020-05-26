<?PHP

include 'C:/wamp64/www/projet_web/config.php';
class produitC 



{



	

      	public function ajouterproduit($produit) 
   	{

   		$sql="insert into produit (idproduit, Libelle, Sexe, Prix, Taille, urlImage, quantite, description) VALUES (:idproduit, :Libelle, :Sexe, :Prix, :Taille, :urlImage, :quantite, :description)" ;
   		$db=config::getConnexion() ;
   		try
   		{
   			$req=$db->prepare($sql) ;

   			$req->bindValue(':idproduit',$produit->getidproduit());
   			$req->bindValue(':Libelle',$produit->getLibelle());
   			$req->bindValue(':Sexe',$produit->getSexe());
   			$req->bindValue(':Prix',$produit->getPrix());
   			$req->bindValue(':Taille',$produit->getTaille());
   			$req->bindValue(':urlImage',$produit->geturlImage());
        	 $req->bindValue(':quantite',$produit->getquantite());
        	$req->bindValue(':description',$produit->getdescription());
        
   			$req->execute() ;
   			return true ;

   		}
	   	 catch(Exception $e) 
	   	{
	   		echo "Erreur".$e->getMessage();}
         }

	public function afficherproduits()
         {
            $sql="SELECT * FROM `produit` ";
         $db=config::getConnexion();
         try
         {
         $liste=$db->query($sql);
         return $liste;      
         }
         catch(Exception $e) 
         {echo "Erreur".$e->getMessage();
      }}

   
	 public function supprimer($idproduit)
         {
            $sql="delete from produit where idproduit= :idproduit";
         $db=config::getConnexion();
         $req=$db->prepare($sql);
         $req->bindValue(':idproduit',$idproduit);
         try
         {
         $req->execute();
         }
         catch(Exception $e) 
         {echo "Erreur".$e->getMessage();
      }
    } 

    function modifierproduit($produit,$idproduit){
		$sql="UPDATE produit SET idproduit=:idproduit,Libelle=:Libelle,Sexe=:Sexe,Prix=:Prix,Taille=:Taille,urlImage=:urlImage,quantite=:quantite,description=:description WHERE produit.idproduit=:idproduit";
		
		$db = config::getConnexion();
		

		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idproduit=$produit->getidproduit();
		$Libelle=$produit->getLibelle();
        $Sexe=$produit->getSexe();
        $Prix=$produit->getPrix();
         $Taille=$produit->getTaille();
        $urlImage=$produit->geturlImage();
        $quantite=$produit->getquantite();
            $description=$produit->getdescription();
		$datas = array(':idproduit'=>$idproduit,':Libelle'=>$Libelle,':Sexe'=>$Sexe,':Prix'=>$Prix,':Taille'=>$Taille,':urlImage'=>$urlImage,':quantite'=>$quantite,':description'=>$description);
		//$req->bindValue(':iddProduit',$iddProduit);

		$req->bindValue(':idproduit',$idproduit);
		$req->bindValue(':Libelle',$Libelle);
		$req->bindValue(':Sexe',$Sexe);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Taille',$Taille);
		$req->bindValue(':urlImage',$urlImage);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
	
		
            $s=$req->execute();
			
            header('Location: afficher.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($idproduit){
		$sql="SELECT * from produit where idproduit=$idproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

  function trie_asc (){
    //$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
    $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.description order by Prix ASC ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
  function trie_desc (){
    //$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
   $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.description order by Prix DESC ";
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
   $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.description";
 // $sql="SELECT *FROM produit RIGHT JOIN categoire ON produit.description = categoire.ID_categorie WHERE categoire.ID_categorie IS NULL";
   
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
  function afficherwomen(){
   $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.description where categoire.nom_categorie='women' ";
 // $sql="SELECT *FROM produit RIGHT JOIN categoire ON produit.description = categoire.ID_categorie WHERE categoire.ID_categorie IS NULL";
   
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
  function affichermen(){
   $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.description where categoire.nom_categorie='men' ";
 // $sql="SELECT *FROM produit RIGHT JOIN categoire ON produit.description = categoire.ID_categorie WHERE categoire.ID_categorie IS NULL";
   
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
   function afficherkid(){
   $sql="SELECT * from produit INNER JOIN categoire ON categoire.ID_categorie=produit.description where categoire.nom_categorie='kids' ";
 // $sql="SELECT *FROM produit RIGHT JOIN categoire ON produit.description = categoire.ID_categorie WHERE categoire.ID_categorie IS NULL";
   
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }
function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from produit where Libelle like '%$search_value%' OR Prix like '%$search_value%'";

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