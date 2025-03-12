<HTML>

<BODY>

<?php

function azarEntre($desde, $hasta) {

srand(time());

$cantidadCifras = $hasta - $desde + 1;

$numAzar = (rand() % ($cantidadCifras)) + $desde;

return $numAzar;

}

echo "Un numero al azar entre 1 y 10: ", azarEntre(1, 10), "<BR>";

echo "Otro entre 5 y 7: ", azarEntre(5, 7), "<br>";

echo "y otro entre 100 y 200: ", azarEntre(100, 200), "<BR>";

?>

</BODY>

</HTML>