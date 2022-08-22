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


Class Cliente extends Persona
{
    private float $credito;

    public function getCredito(): float
    {
        return $this->credito;
    }

    public function setCredito(float $credito): void
    {
        $this->credito = $credito;
    }


}

Class Trabajador extends Persona
{
    private float $salario;

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }


}

function main()
{
    $manolo = new Cliente();
    $manolo->setNombre('Manolo');
    $manolo->setTelefono('123456789');
    $manolo->setEdad(45);
    $manolo->setCredito(45.30);

    echo($manolo->getNombre().' es un cliente que tiene '.$manolo->getEdad().' años, su número de teléfono es '.$manolo->getTelefono().' y tiene un crédito de '.$manolo->getCredito().PHP_EOL);

    $ana = new Trabajador();
    $ana->setNombre('Ana');
    $ana->setTelefono('666555444');
    $ana->setEdad(18);
    $ana->setSalario(1000.99);

    echo($ana->getNombre().' es una trabajador que tiene '.$ana->getEdad().' años, su número de teléfono es '.$ana->getTelefono().' y tiene un salario de '.$ana->getSalario().PHP_EOL);

}

main();
