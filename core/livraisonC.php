<?php
include "C:/wamp/www/tameplate/config.php";
/**
 * 
 */

 class LivraisonC 
{
	
function ajouterLivraison($livraison)
	{

 	$sql="INSERT INTO livraison (idcommande,datecommande,montantcommande,etatcommande,lieuLivraison,prixlivraison,idlivreur,idclient,etat) VALUES(:idcommande,:datecommande,:montantcommande,:etatcommande,:lieuLivraison,:prixlivraison,:idlivreur,:idclient,:etat)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $idcommande=$livraison->get_idCommande();
        $datecommande=$livraison->get_dateCommande();
        $montantcommande=$livraison->get_montantCommande();
        $etatcommande=$livraison->get_etatCommande();
        $lieuLivraison=$livraison->get_lieuLivraison();
        $prixlivraison=$livraison->get_prixLivraison();
        $idlivreur=$livraison->get_idLivreur();
        $idclient=$livraison->get_idClient();
        $etat=$livraison->get_etat();
		$req->bindValue(':idcommande',$idcommande);
		$req->bindValue(':datecommande',$datecommande);
		$req->bindValue(':montantcommande',$montantcommande);
		$req->bindValue(':etatcommande',$etatcommande);
		$req->bindValue(':lieuLivraison',$lieuLivraison);
	    $req->bindValue(':prixlivraison',$prixlivraison);
		$req->bindValue(':idlivreur',$idlivreur);
		$req->bindValue(':idclient',$idclient);
		$req->bindValue(':etat',$etat);

            if($req->execute())
            {
            	echo "data insrted successul";
                    header("Location:affecter.php");
            }
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}


function modifierlivraison($livraison,$idcommande){
        $sql="UPDATE livraison SET   datecommande=:datecommande , montantcommande=:montantcommande ,etatcommande=:etatcommande ,lieuLivraison=:lieuLivraison ,prixlivraison=:prixlivraison ,idlivreur=:idlivreur ,idclient=:idclient ,etat=:etat WHERE idcommande=$idcommande";
        $db = config::getConnexion();

        try{
        $req=$db->prepare($sql);
        $idcommande=$livraison->get_idCommande();
        $datecommande=$livraison->get_dateCommande();
        $montantcommande=$livraison->get_montantCommande();
        $etatcommande=$livraison->get_etatCommande();
        $lieuLivraison=$livraison->get_lieuLivraison();
        $prixlivraison=$livraison->get_prixLivraison();
        $idlivreur=$livraison->get_idLivreur();
        $idclient=$livraison->get_idClient();
        $etat=$livraison->get_etat();
        $req->bindValue(':idcommande',$idcommande);
        $req->bindValue(':datecommande',$datecommande);
        $req->bindValue(':montantcommande',$montantcommande);
        $req->bindValue(':etatcommande',$etatcommande);
        $req->bindValue(':lieuLivraison',$lieuLivraison);
        $req->bindValue(':prixlivraison',$prixlivraison);
        $req->bindValue(':idlivreur',$idlivreur);
        $req->bindValue(':idclient',$idclient);
        $req->bindValue(':etat',$etat);

                
            $req->execute();

        ob_start();
       header("Location:index-2.php");
       exit();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

        }
function livraison_details($idcommande){

        $sql="SELECT *  FROM livraison  where idcommande = $idcommande";
        $db = config::getConnexion();
        try{
        $livraison=$db->query($sql);
        return $livraison;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


function Supprimerlivraison($idcommande){
        $sql="DELETE  from livraison where idcommande=$idcommande";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherlivraison()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM livraison";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livraison= $req->fetchALL(PDO::FETCH_OBJ);
        return $livraison;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from livreur where login like '%$search_value%'";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livraison= $req->fetchALL(PDO::FETCH_OBJ);
        echo $livraison["login"];
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}


  function affecterlivraison()
  {
      $database= config::getConnexion();
      $q = $database->prepare("SELECT livraison.idcommande,livraison.datecommande,livraison.montantcommande,livraison.etatcommande,livraison.lieulivraison,CONCAT(livreur.nom,' ',livreur.prenom) as 'livreur' ,CONCAT(clients.nom , ' ',clients.prenom) as 'client',livraison.prixlivraison FROM livraison  join clients on livraison.idclient=clients.id  join livreur on livraison.idlivreur=livreur.login where livraison.etat=1 order by livraison.datecommande desc ");
         $q->execute();
      return $q;
  }

}
?>