<?php

declare( strict_types = 1 );

$numeroIf = 5;
if ($numeroIf>0) {
    echo($numeroIf. ' es positivo'.PHP_EOL);
} elseif ($numeroIf<0) {
    echo($numeroIf. ' es negativo'.PHP_EOL);
} else {
    echo($numeroIf. ' es cero'.PHP_EOL);
}

$numeroWhile = 0;
while ($numeroWhile<3)
{
    $numeroWhile++;
    echo('while: numeroWhile = '.$numeroWhile.PHP_EOL);
}

$numeroWhile = 5;
do {
    $numeroWhile++;
    echo('do while: numeroWhile = '.$numeroWhile.PHP_EOL);
} while ($numeroWhile<3);

for ($numeroFor=0; $numeroFor<= 3; $numeroFor++)
{
    echo('for: numeroFor = '.$numeroFor.PHP_EOL);
}

$estacion = 'verano';
switch ($estacion)
{
    case 'primavera':
        echo('switch: Estamos en primavera.'.PHP_EOL);
        break;
    case 'verano':
        echo('switch: Estamos en verano.'.PHP_EOL);
        break;
    case 'otoño':
        echo('switch: Estamos en otoño.'.PHP_EOL);
        break;
    case 'invierno':
        echo('switch: Estamos en invierno.'.PHP_EOL);
        break;
    default;
        echo('switch: Estación desconocida, posiblemente estamos en otro planeta ;-).'.PHP_EOL);
}
