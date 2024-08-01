<?php
// Declaración de Variables
// Entero
$edad = 25;
// Flotante
$precio = 19.99;
// Cadena de texto
$nombre = "Juan Pérez";
// Booleano
$esEstudiante = true;
// Arreglo
$coloresFavoritos = array("Rojo", "Azul", "Verde", "Amarillo", "Negro");

// Operaciones Aritméticas
// 1. Sumar edad y precio
$suma = $edad + $precio;
echo "La suma de la edad y el precio es: $suma<br>";
// 2. Multiplicar edad por 2
$multiplicacion = $edad * 2;
echo "El doble de la edad es: $multiplicacion<br>";

// Declaración de variables de tipo cadena
$saludo = "Hola";
$nombres = "Juan";
// Concatenación de dos cadenas
$saludoCompleto = $saludo . ", " . $nombres . "!"; // Utilizando el operador de concatenación (.)
// Muestra el saludo completo
echo "El saludo completo es: $saludoCompleto<br>";
// Obtención de la longitud de la cadena
$longitudSaludo = strlen($saludoCompleto);
// Muestra la longitud de la cadena
echo "La longitud del saludo completo es: $longitudSaludo caracteres.<br>";

// Estructura de control condicional
if ($esEstudiante) {
    echo "El usuario es estudiante.<br>";
} else {
    echo "El usuario no es estudiante.<br>";
}

// Creación de un arreglo con al menos cinco elementos
$frutas = array("Manzana", "Banana", "Cereza", "Durazno", "Uva");
// Mostrar un elemento específico del arreglo utilizando su índice
// Por ejemplo, mostrar el tercer elemento (índice 2, ya que los índices comienzan en 0)
echo "El tercer elemento del arreglo es: " . $frutas[2] . "<br>";
?>