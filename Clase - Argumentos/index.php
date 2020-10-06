<?php

// Valores
//function greet($name){
//	return "Hola, $name"; 
//}

//echo greet('Italo');

// Referencias
$course = 'PHP';
function path(&$course){
	$course = 'Laravel';
	echo $course; //Laravel
}

path($course);
echo $course; //Laravel

// Predeterminado
function greet($name = 'Italo'){
	return "Hola, $name";
}

echo greet();
echo greet('Abel');
