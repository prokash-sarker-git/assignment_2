<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($value){
    $noOfVowels=preg_match_all('/[aeiouAEIOU]/',$value);
    return $noOfVowels;
}

function reverseString($value){
    $reverseStringIs= strrev($value);
    return $reverseStringIs;
}

foreach ($strings as $value) {
    $noOfVowels = countVowels($value);
    $reverseStringIs= reverseString($value);

    echo "Original String: $value, Vowel Count: $noOfVowels, Reversed String: $reverseStringIs </br>";

}


?>