<?php
// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function count_vowels($str) {
    $vowel_count = preg_match_all('/[aeiouAEIOU]/', $str);
    return $vowel_count;
}

// Function to reverse a string
function reverse_string($str) {
    return strrev($str);
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $vowel_count = count_vowels($string);
    $reversed_string = reverse_string($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n\n";
}
?>
