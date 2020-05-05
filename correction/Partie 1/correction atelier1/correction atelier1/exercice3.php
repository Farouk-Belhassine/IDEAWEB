<?PHP
$tab=array("Dupont"=>array("prenom"=>"Paul","ville"=>"Paris","age"=>27),"Schmoll"=>array("prenom"=>"kirk","ville"=>"Berlin","age"=>35),"Smith"=>array("prenom"=>"Stan","ville"=>"Londres","age"=>45));
foreach ($tab as $cle=>$valeur){
	echo "Personne: $cle"; echo "</br>";
	foreach($valeur as $c=>$v){
		echo "$c: $v </br>";
	}
	echo "<hr>";
}	

sort($tab);
//array_column(;
?>