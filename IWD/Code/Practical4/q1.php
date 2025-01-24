<!-- Write a script to calculate the length of a string and
count the number of words in the given string without using
string functions. -->

<?php

$str = "Hello my name is Manthan";
$length = 0;
$word_count = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $length++;

    if ($str[$i] == ' ') {
        $word_count++;
    }
}

if ($str[$length - 1] != ' ') {
    $word_count++;
}

echo "length of string: " . $length . "<br>";
echo "word count: " . $word_count;

?>