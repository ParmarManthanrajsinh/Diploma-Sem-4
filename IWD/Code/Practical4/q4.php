<?php

function textToMorse($text)
{
    $morseCode = [
        'A' => '.-',
        'B' => '-...',
        'C' => '-.-.',
        'D' => '-..',
        'E' => '.',
        'F' => '..-.',
        'G' => '--.',
        'H' => '....',
        'I' => '..',
        'J' => '.---',
        'K' => '-.-',
        'L' => '.-..',
        'M' => '--',
        'N' => '-.',
        'O' => '---',
        'P' => '.--.',
        'Q' => '--.-',
        'R' => '.-.',
        'S' => '...',
        'T' => '-',
        'U' => '..-',
        'V' => '...-',
        'W' => '.--',
        'X' => '-..-',
        'Y' => '-.--',
        'Z' => '--..',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
        '0' => '-----',
        ' ' => '/',
    ];

    $text = strtoupper($text);
    $encodedMessage = [];


    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (isset($morseCode[$char])) {
            $encodedMessage[] = $morseCode[$char];
        } else {
            $encodedMessage[] = '?';
        }
    }

    return implode(' ', $encodedMessage);
}

$message = "Manthan";
$morse = textToMorse($message);
echo "Original Message: $message <br>";
echo "Morse Code: $morse";

?>