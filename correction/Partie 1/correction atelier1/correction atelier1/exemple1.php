<?PHP
$x="Bonjour";
$y="bonsoir";
$z=&$x;
echo "x=".$x." y=".$y." z=".$z;
echo "<br>";
$x="Au revoir";
$y=&$x;
echo "x=".$x." y=".$y." z=".$z;
?>