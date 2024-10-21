<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin ) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesion";
}

echo "<br>";

// If anidado...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)) {
    echo "El Arreglo de cliente no esta vacio";

    if ($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}

echo "<br>";

// else if
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} elseif ($cliente["informacion"]["tipo"] === "Premium") {
    echo "El cliente es premium";
} else {
    echo "No hay cliente definido como premium";
}

echo "<br>";

// Switch
$tecnologia ='PHP';
switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo "Emmm...";
        break;
    default:
        echo "Algun lenguaje que no se cual";
        break;
    }


include 'includes/footer.php';