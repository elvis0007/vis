<?php 
class autos{
    public $marca;
    public $modelo;
    public $color;

    function mostrar(){
        echo "Marca: $this->marca, Modelo: $this->modelo, Color: $this->color";
    }

    // contructor con parametros
   // function __construct($marca = "Marca", $modelo = "Modelo", $color = "Color"){
     //   $this->marca = $marca;
       // $this->modelo = $modelo;
        //$this->color = $color;
    //}

    static function mensaje(){
        echo "Gracias por visitar al consecionario";
    }

}
$auto1 = new autos;
$auto1->marca = "Toyota";
$auto1->modelo = "Corolla";
$auto1->color = "Rojo";
$auto1->mostrar();
autos::mensaje();

print_r("<br>");

$auto2 = new autos;
$auto2->marca = "Nissan";
$auto2->modelo = "Sentra";
$auto2->color = "Azul";
$auto2->mostrar();


print_r("<br>");

$auto4 = new autos("Chevrolet", "Spark", "Blanco");
$auto4->mostrar();

?>