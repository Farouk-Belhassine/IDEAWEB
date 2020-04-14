


<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier une livraison</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>


<form method="POST">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier une livraison
    </div>
    <div class="panel-body">
        <form role="form">
                    <div class="form-group has-success">
                        <label class="control-label" for="success">datecommande</label>
                        <input type="date" class="form-control" id="success" name="dateCommande" />
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">etat commande</label>
                        <input type="text" class="form-control" id="warning" name="etatCommande" />
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">lieuLivraison</label>
                        <input type="text" class="form-control" id="error" name="lieuLivraison" />
					</div>
					
                    <div class="form-group has-success">
                        <label class="control-label" for="success">prixLivraison</label>
                        <input type="number" class="form-control" id="success" name="prixLivraison" />
                    </div>
					<div class="form-group has-success">
                        <label class="control-label" for="success">idLivreur</label>
                        <input type="number" class="form-control" id="success" name="idLivreur" />
                    </div>

	<div class="form-group has-success">
                        <label class="control-label" for="success">etat</label>
                        <input type="number" class="form-control" id="success" name="etat" />
                    </div>

	<div class="form-group has-success">
                        <label class="control-label" for="success">montantCommande</label>
                        <input type="number" class="form-control" id="success" name="montantCommande" />
                    </div>

<div class="form-group has-success">
                        <label class="control-label" for="success">idClient</label>
                        <input type="number" class="form-control" id="success" name="idClient"/>
                    </div>
                </form>

<input type="submit" name="modifier" value="modifier">

<input type="hidden" name="idcommande_ini" >


</form>