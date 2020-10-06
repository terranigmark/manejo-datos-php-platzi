<?php

/*
$greet = function ($name) // variable que requiere lógica
{ 
	return "Hola, $name"; 
};

echo greet('Italo');
*/

function greet(Closure $lang, $name){
	return $lang($name);
}

$es = function ($name){
	return "Hola, $name";
};

$en = function ($name){
	return "Hello, $name";
};

// echo greet($es, 'Lynda');
echo greet($en, 'Danny');