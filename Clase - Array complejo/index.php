<?php

$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

//foreach ($courses as $key => $value) {
//	echo "$key: $value <br>";
//}

function upper($course, $key){
	echo strtoupper($course) . ": $key <br>";
}
array_walk($courses, 'upper');

/**
 * array_key_exists('frontend', $courses);
 * in_array('javascript', $courses);
 * array_keys($courses)
 * array_values($courses)
 */