<?PHP
$chaine="<p>Nous allons tester 
quelques <em>exemples</em> de fonctions 
de manipulation de chaînes de caractères.</p>
";
echo "<p><strong>\$chaine :</strong> $chaine</p>\n";
echo "************************************************";
echo "<p><strong>N/10 premiers caractères :</strong
><br />\n"; 
for ($i=0; $i<strlen($chaine)/10; $i++) 
echo $chaine[$i]."<br />"; 
echo "************************************************"; echo "<br>";
$debut=6;
$taille=6;
echo substr($chaine, $debut-1, $taille);
echo "<br>";echo "************************************************"; echo "<br>";
echo (str_replace("em>", "strong>", $chaine));

?>