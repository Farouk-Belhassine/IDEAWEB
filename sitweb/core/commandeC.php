<?PHP
include 'D:/apps/wamp64/www/sitweb/config.php';
class commandeC {	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.reference= a.reference";
		$sql="select * from commandes";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function ajoutercommande($commande){
		//$sqll="SELECT LAST_INSERT_ID() as i";
		$sql="insert into commandes (cin,idpanier,datelimite,prixlivraison) values (:c,:i,:d,:p)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cin=$commande->getcin();
        $idpanier=$commande->getidpanier();
        $datelimite=$commande->getdatelimite();
        $prixlivraison=$commande->getprixlivraison();
		$req->bindValue(':c',$cin);
		$req->bindValue(':i',$idpanier);
		$req->bindValue(':d',$datelimite);
		$req->bindValue(':p',$prixlivraison);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
}

