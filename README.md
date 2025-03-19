# Función `azarEntre` en PHP

La función `azarEntre($num1, $num2)` genera un número aleatorio entre dos valores dados.

## 🔍 **Explicación del código**

```php
function azarEntre($num1, $num2) {
    srand(time()); // Inicializa la semilla del generador de números aleatorios
    $cantidadCifras = $num2 - $num1 + 1; // Calcula el rango de valores posibles
    $numAzar = (rand() % ($cantidadCifras)) + $num1; // Genera el número aleatorio dentro del rango
    return $numAzar; // Retorna el número generado
}
