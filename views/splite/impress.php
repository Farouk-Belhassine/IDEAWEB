<?php

require_once 'C:/wamp/www/tameplate/core/lib/fpdf/fpdf.php';

//include "../core/clientC.php";
include "C:/wamp/www/tameplate/core/livraisonC.php";



	$livraisonc=new LivraisonC();
$listlivraisons=$livraisonc->afficherlivraison();
/**
 *  
 */
class myPDF extends FPDF
{
	
	function header()
	{    
		//$this->Image('images/eye.jpg',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'Banette',0,0,'C');
		$this->Ln(20);
		$this->SetFont('Times','',12);

		$this->Text(8,60,'Liste des livraisons:');
		//$this->Text(8,65,'Date :'.date("d-m-Y"));
		//$this->Text(8,70,'Mode de reglement : check');
		$this->Text(230,60,'Banette');
		$this->Text(230,65,'19 rue des pyramides , Aouina');
		$this->Text(230,70,'1009 la Soukra');
		$this->Ln(50);


	}
	function footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','',0);
		$this->Cell(196,5,' TEL:+21620934437' ,0,0,'C');
				$this->LN();

		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

	}
	function headerTable(){


		
		$this->SetFont('Arial','B',12);
		$this->Cell(30,10,'idcommande',1,0,'C');
		$this->Cell(30,10,'date	',1,0,'C');
		$this->Cell(40,10,'montantCommande',1,0,'C'); 
		$this->Cell(30,10,'etatcom	',1,0,'C');

		$this->Cell(30,10,'lieu	',1,0,'C');
		$this->Cell(30,10,'prix	',1,0,'C');
		$this->Cell(30,10,'idlivreur	',1,0,'C');

			$this->Cell(30,10,'idclient	',1,0,'C');

				$this->Cell(30,10,'etat	',1,0,'C');
	
		$this->LN();



	}
	function viewTable($listlivraisons)
	{
		$this->SetFont('times','',12);
			foreach($listlivraisons as $livraison):

		$this->Cell(30,10,  $livraison->idcommande ,1,0,'C');
	 	$this->Cell(30,10, $livraison->datecommande,1,0,'L');
	 	$this->Cell(40,10,  $livraison->montantcommande,1,0,'L');
	 	$this->Cell(30,10, $livraison->etatcommande,1,0,'L');
	 	$this->Cell(30,10, $livraison->lieulivraison,1,0,'L');

$this->Cell(30,10, $livraison->prixlivraison,1,0,'L');
$this->Cell(30,10, $livraison->idlivreur,1,0,'L');
$this->Cell(30,10, $livraison->idclient,1,0,'L');
$this->Cell(30,10, $livraison->etat,1,0,'L');

												    
												    
		
		$this->LN();

			endforeach; 
		$this->LN();

	}
	

}

$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($listlivraisons);
$pdf->Output();

?>