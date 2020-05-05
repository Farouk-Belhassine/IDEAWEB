<?php
require 'C:/xampp/htdocs/eyezone/core/commandeC.php';
     require_once '../../core/lib/phpmailer/PHPMailerAutoload.php';
require_once 'print.php';

$id=$_GET['id'];
$commandeC =new commandeC();
$listeproduits=$commandeC->afficher_facture($id);
 foreach($listeproduits as $produit){
			$date=$produit->dateCommande;
			$prixTotal=$produit->PrixTotal;
			$idCommande=$produit->idCommande;
			}
         $result=$commandeC->getMailCommande($id);
        $email=$result->email;

$file = 'facture.pdf';

    ob_start();

 $pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->header_page($date,$idCommande);
$pdf->headerTable();
$pdf->viewTable($listeproduits,$prixTotal);
$pdf->Output($file,'F');
      ob_end_flush(); 
$commandeC->validerCommande($id);
   $mail = new PHPMailer();
  $mail->Host = "smtp.gmail.com";
 // $mail->SMTPDebug = 3;
  $mail->IsSMTP();
try {  

     
  //$mail->Host = "smtp.gmail.com";
echo !extension_loaded('openssl')?"Not Available":"Available";

  $mail->SMTPAuth = true;
  $mail->Username = "eyezone.manarcity@gmail.com";
  $mail->Password = "eyezone123456";

  $mail->SMTPSecure = "ssl"; 
  $mail->Port = 465; 
  $mail->Subject = "Commande";
  $mail->isHTML(true);
   //$mail->AddAttachment($file_name);  
  $mail->setFrom('eyezone.manarcity@gmail.com','eye zone');
  $body = "Votre commande a eté validée par le directeur de eye zone voici votre facture";
  $mail->Body=$body;
  $mail->addAddress($email);
  $mail->AddAttachment($file);
  $mail->send();
   unlink($file);
   header('Location: listedescommandes.php');

} catch (phpmailerException $e) {
  //you can either report the errors here or redirect them to an error page
  //using the above META tag
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
  //Verify the temporary pdf file got deleted
 // unlink($file);}}/*
   if(!$mail->send()) {
           echo "Mailer Error: " . $mail->ErrorInfo;
          } 
          else {
           echo "Message has been sent successfully";
          }


?>