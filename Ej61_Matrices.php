<!DOCTYPE html>
<html lang="es">
<head>
	 <meta charset="UTF-8">
	 <title>Arreglo multidimensional</title>
</head>
<body>
    <h2>Arreglo multidimensional</h2>

<?php
$numeros=array();
$valor1=100;
for ($f=0; $f<3; $f++) {
	for ($c=0; $c<3; $c++) {
	$numeros[$f][$c] = $valor1;
	$valor+=10;
	echo $numeros[$f][$c], " ";}
	echo "<br>";}

$numeros2=array();
$valor2=500;
for ($f=0; $f<3; $f++) {
	for ($c=0; $c<3; $c++) {
	$numeros2[$f][$c] = $valor2;
	$valor+=20;
	echo $numeros2[$f][$c], " ";}
	echo "<br>";}

$matrizC=array();
