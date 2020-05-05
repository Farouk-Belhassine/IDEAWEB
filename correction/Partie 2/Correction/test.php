<?PHP
include"contact.php";
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['adresse']) && isset($_GET['codePostal'])){
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$adresse=$_GET['adresse'];
$code=$_GET['codePostal']; 
$contact1=new Contact($nom,$prenom,$adresse, $code);
if (!empty($_GET['nom']) && !empty($_GET['prenom']) && !empty($_GET['adresse']) && !empty($_GET['codePostal'])){
?>

<table border="1">
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Adresse</th>
<th>Code Postal</th>
</tr>
<tr>
<td><?PHP echo $contact1->getnom(); ?></td>
<td><?PHP echo $contact1->getprenom(); ?></td>
<td><?PHP echo $contact1->getnom(); ?></td>
<td><?PHP echo $contact1->getcodepost(); ?></td>
</tr>

</table>

<?PHP } 
else{
	echo ("Champs manquants");
}
}
?>
