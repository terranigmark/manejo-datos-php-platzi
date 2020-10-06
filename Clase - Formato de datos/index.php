<?php

// Alterar
$text = "PHP es UN LENGUAJE, año 2020, programación";
//echo strtolower($text);
//echo strtoupper($text);
//echo lcfirst($text);
//echo ucfirst($text);

// Reemplazar
$slug = str_replace(' ', '-', $text);
//echo strtolower($slug);

// Modificación
$code = 39;
echo str_pad($code, 8, '#');
//echo str_pad($code, 8, '#', STR_PAD_BOTH);
//echo str_pad($code, 8, '#', STR_PAD_LEFT);
//echo str_pad($code, 8, '#', STR_PAD_RIGHT);

echo strip_tags($text);

echo strtoupper($text); // monobye
echo mb_strtoupper($text); // multibyte