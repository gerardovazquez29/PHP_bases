<?php include 'includes/header.php';

$nombreCliente = "Gerardo Vazquez";

// conocer extencion de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// convertirlo a mayusculas
echo strtoupper($nombreCliente);

// convertirlo a minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump($mail1 === $mail2); //falso

var_dump(strtolower($mail1) === strtolower($mail2)); // verdadero

echo str_replace('Gerardo', 'G', $nombreCliente); // remplasar un valor por otro

// revisar si un string existe o no
echo strpos($nombreCliente, "Gerardo");

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente" . $nombreCliente . "es" . $tipoCliente;
echo "<br>";
echo "El Cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';