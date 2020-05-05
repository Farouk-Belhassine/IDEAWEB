<?php


include "../../config.php";
 

 class LivraisonC 
{
	
function ajouterLivraison($livraison)
	{

 	$sql="INSERT INTO livraison (cin_client,cin_Livreur,numero_Commande,etat,date,datelivraison) VALUES(:client,:Livreur,:numCommande,:etat,:date,:datelivraison)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $numCommande=$livraison->get_numCommande();
        $date=$livraison->get_date();
        $datelivraison=$livraison->get_datelivraison();
        $Livreur=$livraison->get_Livreur();
        $client=$livraison->get_client();
        $etat=$livraison->get_etat();
		$req->bindValue(':numCommande',$numCommande);
		$req->bindValue(':date',$date);
		$req->bindValue(':datelivraison',$datelivraison);
		$req->bindValue(':Livreur',$Livreur);
		$req->bindValue(':client',$client);
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


function modifierlivraison($livraison,$numCommande){
        $sql="UPDATE livraison SET   date=:date , montantcommande=:montantcommande ,etatcommande=:etatcommande ,datelivraison=:datelivraison ,prixlivraison=:prixlivraison ,Livreur=:Livreur ,client=:client ,etat=:etat WHERE numCommande=$numCommande";
        $db = config::getConnexion();

        try{
        $req=$db->prepare($sql);
        $numCommande=$livraison->get_numCommande();
        $date=$livraison->get_date();
        $montantcommande=$livraison->get_montantCommande();
        $etatcommande=$livraison->get_etatCommande();
        $datelivraison=$livraison->get_datelivraison();
        $prixlivraison=$livraison->get_prixLivraison();
        $Livreur=$livraison->get_Livreur();
        $client=$livraison->get_client();
        $etat=$livraison->get_etat();
        $req->bindValue(':numCommande',$numCommande);
        $req->bindValue(':date',$date);
        $req->bindValue(':montantcommande',$montantcommande);
        $req->bindValue(':etatcommande',$etatcommande);
        $req->bindValue(':datelivraison',$datelivraison);
        $req->bindValue(':prixlivraison',$prixlivraison);
        $req->bindValue(':Livreur',$Livreur);
        $req->bindValue(':client',$client);
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
function livraison_details($numCommande){

        $sql="SELECT *  FROM livraison  where numCommande = $numCommande";
        $db = config::getConnexion();
        try{
        $livraison=$db->query($sql);
        
        return $livraison;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


function Supprimerlivraison($numCommande){
        $sql="DELETE  from livraison where numCommande=$numCommande";
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
        $livraison= $req->fetchALL();
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
     // $q = $database->prepare("SELECT livraison.numCommande,livraison.date,livraison.montantcommande,livraison.etatcommande,livraison.datelivraison,CONCAT(livreur.nom,' ',livreur.prenom) as 'livreur' ,CONCAT(clients.nom , ' ',clients.prenom) as 'client',livraison.prixlivraison FROM livraison  join clients on livraison.client=clients.id  join livreur on livraison.Livreur=livreur.login where livraison.etat=1 order by livraison.date desc ");
         $q->execute();
      return $q;
  }
  function livreur_details($secteur){

    $sql="SELECT *  FROM livreur  where secteur =:secteur ";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':secteur',$secteur);
        $req->execute();
        $livreur= $req->fetchALL();
       
    return $livreur;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function valider ($cin,$nb){

    $sql="UPDATE livreur SET  dispo='invailable' ,nb=nb+1 WHERE cin=:r and dispo='vailable' ";
    $db = config::getConnexion();
    try{
        $nb=$nb+1;
        $req=$db->prepare($sql);
        $req->bindValue(':r',$cin);
        $req->bindValue(':nb',$nb);
        $req->execute();
        ob_start();
   
        exit();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function livreur_CIN($cin){

    $sql="SELECT *  FROM livraison  where cin_client =:cin ";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        $req->execute();
        $livreur= $req->fetchALL();
       
    return $livreur;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
}

?>