<?php

/*
5.	Inventario con arreglos 
Crea un arreglo multidimensional con varios productos. Cada producto debe tener:
•	Nombre. 
•	Precio. 
•	Cantidad. 
Recorre el arreglo y muestra:
•	El valor total de cada producto. 
•	El valor total de todo el inventario. 
•	El producto con mayor valor acumulado. 
Conceptos: arreglos multidimensionales, foreach, operadores y comparaciones.
*/

$botana = [
    [
        "Nombre" => "Doritos",
        "Cantidad" => 55,
        "Precio" => 20
    ],
    [
        "Nombre" => "Prispas",
        "Cantidad" => 15,
        "Precio" => 16
    ],
    [
        "Nombre" => "Cacahuates",
        "Cantidad" => 30,
        "Precio" => 25
    ],
    [
        "Nombre" => "Takis",
        "Cantidad" => 20,
        "Precio" => 18
    ],
    
];

$totalProducto = 0;
$totalInventario = 0;
$nombreProductoMayorValor = "";
$mayorValor = 0;

foreach($botana as $producto){
    $valorProducto = $producto["Cantidad"] * $producto["Precio"];
    $totalInventario += $valorProducto;
    echo "Total del producto \"{$producto['Nombre']}\" es: \${$valorProducto}";
    echo "<br>";
    if($valorProducto > $mayorValor){
        $mayorValor = $valorProducto;
        $nombreProductoMayorValor = $producto["Nombre"];
    }

}
echo "<br>";
echo "Total del inventario es: $totalInventario";
echo "<br>";
echo "<br>";
echo "Producto con mayor valor acumulado es: \"$nombreProductoMayorValor\" con un valor de: \${$mayorValor}";