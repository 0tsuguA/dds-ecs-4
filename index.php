<?php
/*d:1
Descripción: Personal Sola Firma
TasaEfectivaMensual: 15 %*/

require_once 'modelo/prestamo.php';
require_once 'modelo/lineaPrestamo.php';
require_once 'modelo/datosPersona.php';
require_once 'modelo/direccion.php';
require_once 'modelo/provincia.php';

$provincia = new Provincia();
$provincia->Id = 1;
$provincia->Descripcion = 'Santa Fe';

$direccion = new Direccion();
$direccion->Id = 1;
$direccion->Calle = 'Montevideo';
$direccion->Numero = 34;
$direccion->Localidad = 'Rosario';
$direccion->Provincia = $provincia;

$titular = new DatosPersona();
$titular->Id = 1;
$titular->Nombre = 'Daniel';
$titular->Apellido = 'Rodriguez';
$titular->Documento = 12456789;
$titular->Direccion = $direccion;

$lineaPrestamo = new LineaPrestamo();
$lineaPrestamo->Id = 1;
$lineaPrestamo->Descripcion = 'Personal Sola firma';
$lineaPrestamo->TasaEfectivaMensual = '15%';

$prestamo = new Prestamo();
$prestamo->Id = 1;
$prestamo->LineaPrestamo = $lineaPrestamo;
$prestamo->Titular = $titular;
$prestamo->FechaAlta = '21/08/2019';
$prestamo->CantidadCuotas = 36;
$prestamo->MontoCapital = 10000;

$prestamo->MostrarDatos();
