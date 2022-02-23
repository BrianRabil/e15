<?php
$VOWELS = ['a', 'e', 'i', 'o', 'u'];
$ALPHABET = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

$answer = $_GET['answer'];

$is_palindrome = $answer == strrev($answer) ? "Yes" : "No";

$vowel_count = 0;
$answer_arr = str_split($answer);

foreach ($answer_arr as $letter) {
    $lowercase_letter = strtolower($letter);
    $is_vowel = in_array($lowercase_letter, $VOWELS);
    if ($is_vowel) {
        $vowel_count = $vowel_count + 1;
    }
}

require 'index.php';