<?php
$answer = $_GET['answer'];

$palindrome = is_palindrome($answer); 
$vowel_count = count_vowels($answer);

function is_palindrome($str) {
    return $str == strrev($str) ? "Yes" : "No";
}

function count_vowels($word) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $chars = str_split(strtolower($word));
    $count = 0;

    foreach ($chars as $char) {
        $is_vowel = in_array($char, $vowels);
        if ($is_vowel) {
            $count = $count + 1;
        }
    }

    return $count;
}

require 'index.php';