<?php
//construction du tableau semaine
$semaine=array('lundi','mardi','mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
 
//parcours du tableau
 echo'<table border=2><tr>';
foreach($semaine as $jour){
    echo'<td>'.$jour.'</td>';
}
echo '</tr></table>';
/*echo'<table border=2><tr>';
for ($i=0;$i<7;$i++){
echo'<td>'.$semaine[$i].'</td>';	
}
echo '</tr></table>';*/
?>