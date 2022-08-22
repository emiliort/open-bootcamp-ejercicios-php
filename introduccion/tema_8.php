<?php

declare( strict_types = 1 );

class Persona
{
    private int $edad;
    private string $nombre;
    private string $telefono;

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }


    public function getTelefono(): string
    {
        return $this->telefono;
    }


    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }


    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

}

function main():void
{
    $manolo = new Persona();
    $manolo->setNombre('Manolo');
    $manolo->setTelefono('123456789');
    $manolo->setEdad(45);

    echo($manolo->getNombre().' tiene '.$manolo->getEdad().' años y su número de teléfono es '.$manolo->getTelefono());
}

main();
