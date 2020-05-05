<?php

require_once '../../core/lib/fpdf/fpdf.php';
require_once 'C:/xampp/htdocs/eyezone/entites/commande.php';
require_once 'C:/xampp/htdocs/eyezone/core/commandeC.php';
require_once 'C:/xampp/htdocs/eyezone/core/classpanier.php';
$panier=creationPanier();
$listeproduits=recupererProduitduPannier();
$nbArticles=compterArticles();

/**
 *  
 */
class myPDF extends FPDF
{
	
	function header()
	{    
		$this->Image('images/eye.jpg',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'EYE ZONE',0,0,'C');
		$this->Ln(20);
		$this->SetFont('Times','',12);

		$this->Text(8,60,'N: de facture 2');
		$this->Text(8,65,'Date :'.date("d-m-Y"));
		$this->Text(8,70,'Mode de reglement : check');
		$this->Text(230,60,'Ayadi Yassine');
		$this->Text(230,65,'19 rue khrouba bellevue');
		$this->Text(230,70,'1009 el ouardia');
		$this->Ln(50);


	}
	function footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','',0);
		$this->Cell(196,5,'Adress: Manar City 3th floor, Tunis - TEL:+21655996989' ,0,0,'C');
				$this->LN();

		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

	}
	function headerTable(){

		
		$this->SetFont('Times','B',12);
		$this->Cell(46,10,'Reference',1,0,'C');
		$this->Cell(46,10,'Marque',1,0,'C');
		$this->Cell(46,10,'Qunatite',1,0,'C'); 
		$this->Cell(46,10,'TVA',1,0,'C');
		$this->Cell(46,10,'Prix Unitaire HT',1,0,'C');
		$this->Cell(46,10,'Prix NET',1,0,'C');
		$this->LN();



	}
	function viewTable($listeproduits)
	{
		$this->SetFont('times','',12);
			foreach($listeproduits as $produit):

		$this->Cell(46,10, $produit->refe,1,0,'C');
		$pos=array_search($produit->refe,$_SESSION['panier']['refeProduit']); 
	 	$this->Cell(46,10,$produit->mar,1,0,'L');
	 	$this->Cell(46,10,$_SESSION['panier']['qteProduit'][$pos],1,0,'L');
	 	$this->Cell(46,10,'18%',1,0,'L');
	 	$this->Cell(46,10,$produit->prix,1,0,'L');
		$this->Cell(46,10,$produit->prix*1.18,1,0,'L');
		
		$this->LN();

			endforeach; 
		$this->LN();
        $this->Cell(46,10,'Prix Total HT',1,0,'C');
		$this->Cell(46,10,MontantGlobal(),1,0,'L');
		$this->LN();
        $this->Cell(46,10,'TVA ',1,0,'C');
		$this->Cell(46,10,MontantGlobal()*0.18,1,0,'L');
		$this->LN();
        $this->Cell(46,10,'Total ',1,0,'C');
		$this->Cell(46,10,MontantGlobal()*1.18." DT",1,0,'L');
	}
	

}
$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($listeproduits);
$pdf->Output();
//header("location:panier.php");

?>	
				
