<?php

echo 'Un texto de una línea 
varias líneas
comilla simple \' backslash \\ continuar con mas texto
$variable <br>';

$name = 'italo';
echo "Mi nombre es $name <br>";

$courses = [
	'backend' => [
		'PHP',
		'Laravel'
	]
];

class User{
	public $name = 'italo';
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'][0]} <br>";

$courses = ['backend' => 'PHP'];

echo "$user->name quiere aprender {$courses['backend']} <br>";

$teacher = 'italo';
$italo = 'Profesor de PHP';
echo "$teacher es ${$teacher}";

//Función
function getTeacher(){
	return 'teacher';
}

$teacher = 'Italo';

echo "{${getTeacher()}} enseña PHP <br>";