<?PHP

include 'C:/wamp64/www/projet_web/config.php';
class categorieC
{

   	public function ajoutercategorie($categorie) 
   	{

   		$sql="insert into categoire (ID_categorie, nom_categorie) VALUES (:ID_categorie, :nom_categorie)" ;
   		$db=config::getConnexion() ;
   		try
   		{
   			$req=$db->prepare($sql) ;

   			$req->bindValue(':ID_categorie',$categorie->getID_categorie());
   			$req->bindValue(':nom_categorie',$categorie->getnom_categorie());
   		
        
   			$req->execute() ;
   			return true ;

   		}
	   	 catch(Exception $e) 
	   	{
	   		echo "Erreur".$e->getMessage();}
         }

	public function affichercategorie()
         {
            $sql="SELECT * FROM `categoire` ";
         $db=config::getConnexion();
         try
         {
         $liste=$db->query($sql);
         return $liste;      
         }
         catch(Exception $e) 
         {echo "Erreur".$e->getMessage();
      }}
       public function supprimer($ID_categorie)
         {
            $sql="delete from categoire where ID_categorie= :ID_categorie";
         $db=config::getConnexion();
         $req=$db->prepare($sql);
         $req->bindValue(':ID_categorie',$ID_categorie);
         try
         {
         $req->execute();
         }
         catch(Exception $e) 
         {echo "Erreur".$e->getMessage();
      }
    } 

    function modifiercategorie($categorie,$ID_categorie){
		$sql="UPDATE categoire SET ID_categorie=:ID_categorie,nom_categorie=:nom_categorie WHERE ID_categorie=:ID_categorie";
		
		$db = config::getConnexion();
		

		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $ID_categorie=$categorie->getID_categorie();
		$nom_categorie=$categorie->getnom_categorie();
        
		$datas = array(':ID_categorie'=>$ID_categorie,':nom_categorie'=>$nom_categorie);
		//$req->bindValue(':iddProduit',$iddProduit);

		$req->bindValue(':ID_categorie',$ID_categorie);
		$req->bindValue(':nom_categorie',$nom_categorie);
		
	
		
            $s=$req->execute();
			
            header('Location: affichercategorie.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercategorie($ID_categorie){
		$sql="SELECT * from categoire where ID_categorie=$ID_categorie";
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

