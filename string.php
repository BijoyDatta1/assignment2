<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ["a","e","i","o","u"];
foreach($strings as $value){
    $newArray = str_split(trim(strtolower($value)));
    $match = array_intersect($newArray, $vowels);
    echo "Original String: ".$value.", Vowel Count: ".count($match).", Reversed String: ".strrev($value)."<br>";
}

?>