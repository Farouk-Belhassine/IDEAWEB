<?php
include "C:/wamp/www/tameplate/core/livraisonC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les livraisons </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														  <th scope="col">idcommande</th>
													      <th scope="col">date</th>
													      <th scope="col">montantCommande</th>
													      <th scope="col">etatcom</th>
													      <th scope="col">lieu</th>
													      <th scope="col">prix</th>
													      <th scope="col">idlivreur</th>
													      <th scope="col">idclient</th>
													      <th scope="col">etat</th>
													      <th scope="col">action</th>
													</tr>
													
		<?php
	$livraisonc=new LivraisonC();
$listlivraisons=$livraisonc->afficherlivraison();
		foreach($listlivraisons as $livraison) {
			?>
		  <tr>
												      <td> <?= $livraison->idcommande; ?> </td> 
												      <td> <?= $livraison->datecommande ?> </td>
												      <td> <?= $livraison->montantcommande; ?> </td>
												      <td> <?= $livraison->etatcommande; ?> </td>
												      <td> <?= $livraison->lieulivraison; ?> </td>
												      <td> <?= $livraison->prixlivraison; ?> </td>
												      <td> <?= $livraison->idlivreur ?> </td>
												      <td> <?= $livraison->idclient; ?> </td>
												      <td> <?= $livraison->etat; ?> </td>
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>