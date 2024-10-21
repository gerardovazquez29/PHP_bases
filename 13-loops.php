<?php include 'includes/header.php';

// While
$i = 0;
while($i <= 10) {
    echo $i . "<br>";
    $i++; // incremento
}

echo "<br>";
// DoWhile
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while($i <= 10);

echo "<br>";
// for loop
for ($i=0; $i < 10 ; $i++) { 
    echo $i . "<br>";
}


/**
 * 3 imprimir FIZZ
 * 5 imprimir BUZZ
 * 3 y 5 imprimir FIZZ BUZZ
 */

 for ($i=1; $i <= 100; $i++) { 
     if($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "-FIZZ BUZZ <br/>";
    } else if($i % 5 === 0) {
        echo $i . "-BUZZ <br/>";
    } else if($i % 3 === 0 ) {
        echo $i . "-FIZZ <br/>";
    } else{
        echo $i . "<br/>";
    }
 }

$clientes = array('Pedro', 'Juan', 'Karen');

//foreach
foreach( $clientes as $cliente ) {
    echo $cliente . '<br/>';
}

//for
for ($i=0; $i < count($clientes) ; $i++) { 
    echo $clientes[$i] . '<br/>';
}

//arreglo asociativo
$cliente = [
    'nombre' => 'Juan',
    'Saldo' => 200,
    'Tipo' => 'Premium'
];
foreach( $cliente as $valor ) {
    echo $valor . '<br/>';
}



include 'includes/footer.php';