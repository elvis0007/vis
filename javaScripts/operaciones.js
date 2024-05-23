class Operaciones{

    constructor(valor1 , valor2){
        this.valor1 = valor1;
        this.valor2 = valor2;
    }
     sumarNumeros() {
        return this.valor1 + this.valor2;
    }
    restarNumeros(){
        return this.valor1 - this.valor2;
    }
    multiplicarNumeros(){
        return this.valor1 * this.valor2;
    }
    dividirNumeros(){
        return this.valor1 / this.valor2;
    }
    


}

function sumardeNumeros(){
    var n1 = parseInt(document.getElementById("num1").value);
    var n2 = parseInt(document.getElementById("num2").value);
    var resul = new Operaciones(n1,n2);
    alert("La suma de los numeros es: " + resul.sumarNumeros());
    document.getElementById("resultadoS").innerHTML = "La suma es " + resul.sumarNumeros();
}

function restardeNumeros(){
    var n3 = parseInt(document.getElementById("num3").value);
    var n4 = parseInt(document.getElementById("num4").value);
    var resul = new Operaciones(n3,n4);
    alert("La resta de los numeros es: " + resul.restarNumeros());
    document.getElementById("resultadoR").innerHTML = "la resta es " +resul.restarNumeros();
}
function multiplicardeNumeros(){
    var n1 = parseInt(document.getElementById("num5").value);
    var n2 = parseInt(document.getElementById("num6").value);
    var resul = new Operaciones(n1,n2);
    alert("La multiplicacion de los numeros es: " + resul.multiplicarNumeros() );
    document.getElementById("resultadoM").innerHTML = "La multiplicaicon es " + resul.multiplicarNumeros();
}
function dividirdeNumeros(){
    var n1 = parseInt(document.getElementById("num7").value);
    var n2 = parseInt(document.getElementById("num8").value);
    var resul = new Operaciones(n1,n2);
    alert("La division de los numeros es: " + resul.dividirNumeros());
    document.getElementById("resultadoD").innerHTML = "La divicion es " +resul.dividirNumeros();
}
// Path: Clase2/js/operaciones.js
