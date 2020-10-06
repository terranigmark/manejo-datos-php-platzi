<?php

//$frontend = ['javascript'];
//$backend = ['php', 'laravel'];

$frontend = [
	'frontend' => 'javascript'
];

$backend = [
	'backend' => 'php', 
	'framework' => 'laravel'
];

echo "<pre>";
//var_dump($frontend + $backend);
//var_dump(array_merge($frontend, $backend));

$frontend = [
	'a' => 'javascript'
];

$backend = [
	'a' => 'php', 
	'b' => 'laravel'
];

//var_dump(array_merge($frontend, $backend));
var_dump(array_merge_recursive($frontend, $backend));

$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));