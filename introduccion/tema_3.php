<?php

declare( strict_types = 1 );

function add (int $a, int $b, int $c): int
{
    return $a+$b+$c;
}

class Car
{
    public function __construct(private int $doors)
    {
    }

    public function addDoor(): void
    {
        $this->doors++;
    }

    public function totalDoors():int
    {
        return $this->doors;
    }
}

function main () {
    echo('1+3+5 = ');
    echo (add(1,3,5));
    echo PHP_EOL;
    echo PHP_EOL;

    $MiCoche = new Car(4);
    echo ("MiCoche tiene ".$MiCoche->totalDoors().' puertas');
    echo PHP_EOL;
    echo ('Añado una puerta a MiCoche');
    echo PHP_EOL;
    $MiCoche->addDoor();
    echo ("MiCoche tiene ".$MiCoche->totalDoors().' puertas');
    echo PHP_EOL;

}
main();