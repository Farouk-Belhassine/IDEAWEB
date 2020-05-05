<?PHP
  include '../../../core/actualiteC.php';
   include '../../../entities/actualite.php';

  /*  $actualiteC1=new actualiteC();
    $actualiteC1->trier($_POST["type"]);
    header('Location: testaffiche.php'); 

?>  */

$actualite1C=new actualiteC();
if (isset($_POST["type"]))
{
	$actualite1C->trier($_POST["type"]);
	header('Location: testaffiche.php');
}
 else echo "erreur";
?> 
