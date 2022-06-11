<?php

require_once 'lineaPrestamo.php';
require_once 'datosPersona.php';


class Prestamo
{
    public $Id;
    public $LineaPrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;

    public function MostrarDatos()
    {
        echo 'Los datos de la persona son: ' . '<br>';
        echo 'Id: ' . $this->Id . '<br>';;
        echo 'Descripcion: ' . $this->LineaPrestamo->Descripcion . '<br>';
        echo 'Tasa efectiva mensual: ' . $this->LineaPrestamo->TasaEfectivaMensual . '<br>';
        echo 'Nombre del titular: ' . $this->Titular->Nombre . '<br>';
        echo 'Apellido del titular: ' . $this->Titular->Apellido . '<br>';
        echo 'Documento del titular: ' . $this->Titular->Documento . '<hr>';
        echo 'Direccion del titular: ' . '<br>';
        echo 'Calle: ' . $this->Titular->Direccion->Calle . '<br>';
        echo 'Numero de calle: ' . $this->Titular->Direccion->Numero . '<br>';
        echo 'Localidad: ' . $this->Titular->Direccion->Localidad . '<br>';
        echo 'Provincia: ' . $this->Titular->Direccion->Provincia->Descripcion . '<br>';
    }
}
