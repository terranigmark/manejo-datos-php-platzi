<?php

//$courses = ['php', 'javascript', 'laravel'];
//sort($courses);
//rsort($courses);

$courses = [
	10 => 'php', 
	100 => 'javascript', 
	1000 => 'laravel'
];
ksort($courses);
//krsort($course); 

//var_dump(array_slice($course, 1));

//$courses = ['php', 'javascript', 'laravel'];
//var_dump(array_chunk($courses, 2));

// array_shift($courses);
// array_pop($courses);
// array_unshift();
// array_push();
// array_flip();