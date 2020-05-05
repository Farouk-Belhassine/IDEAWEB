<?php
include "../../../config.php";
/**
 * 
 */

 class livreurC 
{
	
function ajouterLivreur($livreur)
	{ 
 	$sql="INSERT INTO livreur (cin,nom,prenom,secteur,tel,mail,date_naissance,num_permis,dispo,nb) VALUES(:cin,:nom,:prenom,:secteur,:tel,:mail,:date_naissance,:num_permis,:dispo,:nb)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $dispo="available";
        $secteur=$livreur->getSecteur();
        $tel=$livreur->getTel();
        $date_naiss=$livreur->getDate_naiss();
        $mail=$livreur->getMail();
         $num_permis=$livreur->getNum_permis();
         $nb=0;
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':dispo',$dispo);
		$req->bindValue(':secteur',$secteur);
	    $req->bindValue(':tel',$tel);
		$req->bindValue(':date_naissance',$date_naiss);
		$req->bindValue(':mail',$mail);
        $req->bindValue(':num_permis',$num_permis);
        $req->bindValue(':nb',$nb);
            $req->execute();
            
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}

   function afficherlivreur()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM livreur";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livreur= $req->fetchALL();
        return $livreur;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherlivreur7()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM livreur order by nb DESC LIMIT 0,12 ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livreur= $req->fetchALL();
        return $livreur;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function Supprimerlivreur($CIN){
        $sql="DELETE  from livreur where cin=:CIN";
        $db = config::getConnexion();
        
        try{
        $req=$db->prepare($sql);
                $req->bindValue(':CIN',$CIN);

        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function modifierlivreur($livreur,$r){
        $sql="UPDATE livreur SET  cin=:cin,nom=:nom,prenom=:prenom,secteur=:secteur,tel=:tel,mail=:mail,date_naissance=:date_naissance,num_permis=:num_permis,dispo=:dispo WHERE cin=:r";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);		
            $cin=$livreur->getCin();
            $nom=$livreur->getNom();
            $prenom=$livreur->getPrenom();
            $dispo=$livreur->getDispo();
            $secteur=$livreur->getSecteur();
            $tel=$livreur->getTel();
            $date_naissance=$livreur->getDate_naiss();
            $mail=$livreur->getMail();
             $num_permis=$livreur->getNum_permis();
             $req->bindValue(':r',$r);
             $req->bindValue(':cin',$cin);
             $req->bindValue(':nom',$nom);
             $req->bindValue(':prenom',$prenom);
             $req->bindValue(':dispo',$dispo);
             $req->bindValue(':secteur',$secteur);
             $req->bindValue(':tel',$tel);
             $req->bindValue(':date_naissance',$date_naissance);
             $req->bindValue(':mail',$mail);
             $req->bindValue(':num_permis',$num_permis);
            $req->execute();

        ob_start();
       
       exit();
       
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from livreur where dispo like '%$search_value%' or secteur like '%$search_value%' or nom like '%$search_value%' or prenom like '%$search_value%' or tel like '%$search_value%' or mail like '%$search_value%' or cin like '%$search_value%'";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livreur= $req->fetchALL();
        return $livreur;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        
       $db = config::getConnexion();
            $sql="SElECT * From livreur ORDER BY nom";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $livreur= $req->fetchALL(PDO::FETCH_OBJ);
        return $livreur;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}}
?>