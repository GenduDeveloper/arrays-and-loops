<?php

/* Создать массив, индексами которого являются буквы русского языка, а значениями
   - соответствующие латинские буквы или из сочетания ('а' => 'а','б' => 'b','в' => 'v')
   Написать функцию транслитерации строк (замены русских символов на латинские
   буквы или из сочетания)*/

$translitArray = [
    'а' => 'а',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh'
];

function transliterationOfStrings(string $str, array $translitArray) : string
{
    foreach ($translitArray as $ruValue => $enValue) {
        $str = str_replace($ruValue, $enValue, $str);
    }

    return $str;
}

$testText = 'ёж';
$translitString = transliterationOfStrings($testText, $translitArray);

echo $translitString;


