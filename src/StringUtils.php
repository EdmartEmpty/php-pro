<?php 

function capitalize($text)
{
    if ($text === '' || $text === null) {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}