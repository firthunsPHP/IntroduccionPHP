<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo "<br>";
// Eliminar espacios en blanco
echo ">>>>Eliminar espacios en blancos" . "</br>";
$texto = trim($nombreCliente);
echo $texto;
echo "<br>";
echo strlen($texto);

echo "<br>";
//Convertirlo a mayusculas
echo ">>>>Convertirlo a mayusculas" . "</br>";
echo strtoupper($nombreCliente);

// Convertirlo en minusculas
echo ">>>>Convertirlo a minusculas" . "</br>";
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan', 'J', $nombreCliente);

// Revisar si un string existe o no
echo ">>>>Revisar si un string existe o no" . "</br>";
echo strpos($nombreCliente, 'Pedro');

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

echo "El Cliente {$nombreCliente} es ${tipoCliente} ";

include 'includes/footer.php';