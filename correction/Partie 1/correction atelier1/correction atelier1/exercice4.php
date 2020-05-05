<?PHP
$x=127;
$y=rand(0,1000);
$nb=1;
while ($y != $x){
	$y=rand(0,1000);
	$nb++;
}
echo $nb;
?>