<HTML>

<BODY>

<?php

function azarEntre($num1, $num2) {

srand(time());

$cantidadCifras = $num2 - $num1 + 1;

$numAzar = (rand() % ($cantidadCifras)) + $num1;

return $numAzar;

}

echo "Un numero al azar entre 1 y 10 : Es ", azarEntre(1, 10), "<BR>";

echo "Otro entre 5 y 7 : Es ", azarEntre(5, 7), "<br>";

echo "y otro entre 100 y 200 : Es ". azarEntre(100, 200). "<BR>";

?>

</BODY>

</HTML>