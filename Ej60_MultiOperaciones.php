<!DOCTYPE html>
<html lang="es"> 
<head>     
	<meta charset="UTF-8">     
	<title>Registro de numeros</title>
</head> 
<body>      

<h2>Registro de números</h2>      
<!-- Formulario de captura --> 
<form method="POST" action="">

<label>Introduce el primer numero:</label>
<input type="number" name="numero1" id="numero1">
<br>

<label>Introduce el segundo numero:</label>
<input type="number" name="numero2" id="numero2">

<button type="button" onclick="agregar()">
Agregar</button>

<input type="hidden" name="numero1" id="numero1">
<input type="hidden" name="numero2" id="numero2">

<br><br>
<p id="mensaje">Valores capturados: 0 de 6</p>

<!-- Botón para guardar y calcular -->
<button type="submit" name="guardar" value="guardar">     
Guardar y calcular </button>
</form>

    <script>

      // Declaramos un vector vacio
      let numero1 = [];
      let numero2 = [];
      function agregar() {
        let dato1=document.getElementById("numero1").value;
        let dato2=document.getElementById("numero2").value;
        if (dato1<51 and dato>99 and dato2>-1 and dato2<-51) {
          alert("Valores no validos");
          return;
        }
        if (vector.length < 6) {
          
          numero1.push(dato1);
          numero2.push(dato2);
    
          document.getElementById("numero1").value = JSON.stringify(numero1);
          document.getElementById("numero2").value = JSON.stringify(numero2);
          
          document.getElementById("numero1").value = "";
          document.getElementById("numero2").value = "";
            
            document.getElementById("mensaje").innerHTML="Valores capturados: " + numero.length + " de 6";
            if (numero1.length == 4) {
              document.getElementById("guardar").disabled= false;
              document.getElementById("mensaje").innerHTML= "¡Ya capturaste los 6 valores!";
            }
        }
      }

      </script>


<?php     
// Verificar si se presionó el botón Guardar     
if (isset($_POST['guardar'])) {

	$num1=json_decode($_POST['n1'],true);
  $num2=json_decode($_POST['n2'],true);


    $suma= array();
    $resta=array();
    $muli=array();
    $divi=array();

  for ($i = 0; $i < 3; $i++) { 

   // Ciclo para realizar los cálculos 
   $suma[$i]=$numeros1[$i]+$numeros2[$i];
   $resta[$i]=$numeros1[$i]-$numeros2[$i];
   $multi[$i]=$numeros1[$i]*$numeros2[$i];
   $divi[$i]=$numeros1[$i]/$numeros2[$i];  }

           
    echo "<h3>ARREGLO DE SUMA</h3>";
    for ($i = 0; $i < 3; $i++) {             
    	echo $suma[$i] . "<br>";   
            
    echo "<h3>ARREGLO DE RESTA</h3>";           
    	echo $cantidades[$i] . "<br>"; 
            
     echo "<h3>ARREGLO DE MULTIPLICACION</h3>";                     
     	echo "$multi[$i]". "<br>";}

     echo "<h3>ARREGLO DE DIVISION</h3>";          
      	echo "-" . number_format($divi[$i], 2) . "<br>";}     
