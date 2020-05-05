<HTML>
<head>
</head>
<body>
<form method="GET">
<table>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP if (isset($_GET['envoyer'])){echo $_GET['nom'];}   ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP if (isset($_GET['envoyer'])){echo $_GET['prenom'];}   ?>"></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type="text" name="email" value="<?PHP if (isset($_GET['envoyer'])){echo $_GET['email'];}   ?>"></td>
</tr>
<tr>
<td>Num tél</td>
<td><input type="text" name="numTel" value="<?PHP if (isset($_GET['envoyer'])){echo $_GET['numTel'];}   ?>"></td>
</tr>
<tr>
<td>Niveau</td>
<td><input type="radio" name="niveau" value="débutant">débutant<input type="radio" name="niveau" value="professionnel">professionnel</td>
</tr>
<tr>
<td>Technologies</td>
<td><input type="checkbox" name="tech[]" value="HTML">HTML<input type="checkbox" value="CSS" name="tech[]">CSS<input type="checkbox" name="tech[]" value="JS">JS<input type="checkbox" name="tech[]" value="PHP">PHP<input type="checkbox" name="tech[]" value="Laravel">Laravel</td>
</tr>
<tr>
<td>Outils</td>
<td><select name="outil">
<option></option>
<option value="w">WAMP</option>
<option value="l">LAMP</option>
<option value="m">MAMP</option>
<option value="x">XAMP</option>
</td>
</tr>
<tr>
<td>Message</td>
<td><textarea name="message"><?PHP if (isset($_GET['envoyer'])){echo $_GET['message'];}   ?></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="envoyer" value="envoyer"></td>
</tr>
</table>
</form>
</body>
</HTML>
<?PHP

if (isset($_GET['envoyer'])){
	$erreur=0;
	
	if (empty($_GET['nom'])){
		echo "nom obligatoire";
		echo "<br>";
		$erreur=1;
	}
	
	if (empty($_GET['prenom'])){
		echo "prenom obligatoire";
		echo "<br>";
		$erreur=1;
	}
	
	if (empty($_GET['email'])){
		echo "email obligatoire";
		echo "<br>";
		$erreur=1;
	}
	
	if (!isset ($_GET['niveau'])){
		echo "Niveau obligatoire";echo "<br>";
		$erreur=1;
	}
	
	if (!isset($_GET['tech'])) {
		echo "faut choisir des technologies";echo "<br>";
		$erreur=1;
		
	}else{
		$tab=$_GET['tech'];
		$nb=count($tab);
		if ($nb < 2){
			echo "faut choisir au moins deux technologies";echo "<br>";
			echo "vous avez choisi $nb technologies";echo "<br>";
			$erreur=1;
		}			 
	}
	
	if (empty($_GET['outil'])){
		echo "faut choisir un outil";echo "<br>";
		$erreur=1;
		
	}else{
		$list=array('w','l','m','x');
		if (in_array($_GET['outil'],$list)){
		}else{
			$msg="verifiez la valeur envoyé";
			echo "$msg"; echo "<br>";
		$erreur=1;
		}	
		
		
	}
	/*echo $_GET['message']; echo "<br>";
	$ms=trim($_GET['message']);
	
	echo $ms; echo "<br>";*/
	//echo $erreur;
	if ($erreur==0){
		echo "Nom:".$_GET['nom']."<br>";
		echo "Prénom: ".$_GET['prenom']."<br>";
		echo "Email: ".$_GET['email']."<br>";
		echo "Tel: ".$_GET['numTel']."<br>";
		echo "Niveau: ".$_GET['niveau']."<br>";
		$tab=$_GET['tech'];
		$tech="";
		for ($i=0;$i<count($tab);$i++){
			$tech=$tech.$tab[$i]."-";
		}
		echo "Technologies choisies: ".$tech."<br>";
		echo "Outil choisi: ".$_GET['outil']."<br>";
		echo "Votre message: ";

	
	echo $_GET['message']; echo "<br>";
	}
	
	
	

}

?>
