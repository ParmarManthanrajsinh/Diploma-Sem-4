<?php
$string = "hello world";
$searchWord = "world";
$replaceWord = "PHP";

if ($string === strtolower($string)) {
    echo "The string is lowercase.<br>";
} else {
    echo "The string is not lowercase.<br>";
}

$reversedString = strrev($string);
echo "Reversed String: $reversedString<br>";

$stringWithoutSpaces = trim($string);
echo "String without white spaces: $stringWithoutSpaces<br>";

$replacedString = str_replace($searchWord, $replaceWord, $string);
echo "String after replacing '$searchWord' with '$replaceWord': $replacedString<br>";
?>