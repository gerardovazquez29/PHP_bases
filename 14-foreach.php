<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televicion 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach( $productos as $producto ) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$ " . $producto['precio']; ?> </p>
        <!-- Operador terneario  para crear expreciones condicionales-->
        <p><?php echo ($producto['disponible']) ? 'disponible' : 'No disponible'; ?></p>
    </li>
    <?php

}



/* foreach( $productos as $producto ) {
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
} */

include 'includes/footer.php';