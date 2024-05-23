<?php
$Numero = 20 ;
$numero2 = 50;
$resultado = $Numero + $numero2;

print_r($resultado);
var_dump($resultado);
print_r("<br>");

$cadena = "Hola";
print_r($cadena);
var_dump($cadena);  

print_r("<br>");

$booleano = true;
print_r($booleano);
var_dump($booleano);

print_r("<br>");

$Arreglo = array("Lunes", "Martes", "Miercoles");
print_r($Arreglo);
var_dump($Arreglo);

print_r("<br>");

$verctor =[1,2,3,4,5];
print_r($verctor);
var_dump($verctor);

print_r("<br>");

// Array conpropiedades 
$frutas = array("fruta1" => "manzana", "fruta2" => "uva");
print_r($frutas["fruta1"]);
var_dump($frutas);

print_r("<br>");

// como objeto
$persona = (object)["nombre" => "Juan", "apellido" => "Perez"];
print_r($persona->nombre);
// los objetos tampien podemos imprmmir con echo 
var_dump($persona);

print_r("<br>");

//metodos
function saludar(){
    echo "Hola mundo";
}

saludar();

print_r("<br>");
//metodos con parametros
function saludar2($nombre){
    echo "Hola $nombre";
   
}

saludar2("Juan");

print_r("<br>");

//metodos con parametros y retorno
function saludar3($nombre){
    return  $nombre;
   
}
echo(saludar3("Hola sw"));

print_r("<br>");

// crear una carro con  marca, modelo y color y crear un metodo de impresion del carro 
$auto1 = (object)["marca" => "Toyota", "modelo" => "Corolla", "color" => "Rojo"];
$auto2 = (object)["marca" => "Nissan", "modelo" => "Sentra", "color" => "Azul"];
function imprimir($auto){
    echo "Marca: $auto->marca, Modelo: $auto->modelo, Color: $auto->color";
}
imprimir($auto1);
print_r("<br>");
imprimir($auto2);
?>
