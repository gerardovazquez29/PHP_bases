<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente['nombre'];
echo $cliente['saldo'];
echo "<br>";
echo $cliente['informacion']['disponible'];

echo "<br>";
$cliente['codigo'] = 1234656987;
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';