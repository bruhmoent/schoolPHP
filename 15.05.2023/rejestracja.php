<?php
function rejestracja_pojazdu(?string $numer = '') : string|bool{
$rej = [
    'B'=> 'podlaskie',
    'C'=> 'kujawsko-pomorskie',
    'D'=> 'dolnoslaskie',
    'E'=> 'lodzkie',
    'F'=> 'lubuskie',
    'G'=> 'pomorskie',
    'K'=> 'malopolskie',
    'L'=>  'lubelskie',
    'N'=> 'warminsko-mazurskie',
    'O'=> 'opolskie',
    'P'=>'wielkopolskie',
    'R'=>'podkarpackie',
    'S' =>'slaskie',
    'T'=>'swietokrzyskie',
    'W'=>'mazowieckie',
    'Z'=>'zachodnio-pomorskie'
];
$prefiks = mb_strtoupper(mb_substr($numer, 0, 1));
return isset($rej[prefix]) ? (string)rej[prefix] : (bool)false;
}
?>