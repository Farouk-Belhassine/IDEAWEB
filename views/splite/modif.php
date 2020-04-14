



<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier un livraison</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>

<?PHP
include ('C:/wamp/www/tameplate/entities/livraison.php');
include ('C:/wamp/www/tameplate/core/livraisonC.php');
if (isset($_GET['idcommande'])){
    $livraisonC=new LivraisonC();
    $result=$livraisonC->recupererlivraison($_GET['idcommande']);
    foreach($result as $row){
        $idcommande=$row['idcommande'];
   $dateCommande=$row['dateCommande'];
  $etatCommande=$row['etatCommande'];
  $lieuLivraison=$row['lieuLivraison'];
  $prixLivraison=$row['prixLivraison'];
  $idLivreur=$row['idLivreur'];
  $etat=$row['etat'];
  $montantCommande=$row['montantCommande'];
  $idClient=$row['idClient'];
?>
<form method="POST">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier une livraison
    </div>
    <div class="panel-body">
        <form role="form">
                    <div class="form-group has-success">
                        <label class="control-label" for="success">saisir date</label>
                        <input type="number" class="form-control" id="success" name="dateCommande" value="<?PHP echo $dateCommande ?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">saisir le nom</label>
                        <input type="text" class="form-control" id="warning" name="etatCommande" value="<?PHP echo $etatCommande?>"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir l'adresse</label>
                        <input type="text" class="form-control" id="error" name="lieuLivraison" value="<?PHP echo $lieuLivraison ?>"/>
					</div>
					
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du telephone</label>
                        <input type="number" class="form-control" id="success" name="prixLivraison" value="<?PHP echo $prixLivraison ?>"/>
                    </div>
					<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du commande</label>
                        <input type="number" class="form-control" id="success" name="idLivreur" value="<?PHP echo $idLivreur ?>"/>
                    </div>

	<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du commande</label>
                        <input type="number" class="form-control" id="success" name="etat" value="<?PHP echo $etat ?>"/>
                    </div>

	<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du commande</label>
                        <input type="number" class="form-control" id="success" name="montantCommande" value="<?PHP echo $montantCommande ?>"/>
                    </div>

<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du commande</label>
                        <input type="number" class="form-control" id="success" name="idClient" value="<?PHP echo $idClient ?>"/>
                    </div>
                </form>

<input type="submit" name="modifier" value="modifier">

<input type="hidden" name="idcommande_ini" value="<?PHP echo $_GET['idcommande'];?>">


</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){

 
	$livraison=new livraison($_POST['idcommande'],$_POST['dateCommande'],$_POST['etatCommande'],$_POST['lieuLivraison'],$_POST['prixLivraison'],$_POST['idLivreur'],$_POST['etat'],$_POST['montantCommande'],$_POST['idClient']);
	$livraisonC->modifierlivraison($livraison,$_POST['idcommande_ini']);
	echo $_POST['idcommande_ini'];
	header('Location: index-2.php');
}
?>
</body>
</HTMl>