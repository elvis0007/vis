
var saludo= "HOLA";
console.log(typeof (saludo));
var  decimal= 10.5;
console.log(typeof (decimal));
var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
console.log(typeof(dias));

var estudiante = {"Nombre": "elvis", "Edad": 20, "Carrera": "Ing. Sistemas"};
console.log(typeof(estudiante));
console.log(estudiante.Nombre);
var a = 1;
var b = 1;
var suma = a +b;
// var solo con unavarible para decaras varias en una fila con let 
window.alert(suma);

function Mensaje(){
    console.log("Hola mundo");

}
Mensaje();

function Mensaje2(saludo){
    console.log(saludo);
}
Mensaje2("HOLA");