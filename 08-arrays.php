<?php include 'includes/header.php';

$carrito = ['tablet', 'Television','Computadora'];

//util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// añadir un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto.....';

// Añadir un elemento nuevo al final..
array_push($carrito, "Audifonos");

// Añadir al inicio
array_unshift($carrito, "Smartwatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';