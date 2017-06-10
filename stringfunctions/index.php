<?php
/*
// licznik słów, znaków
$string = 'to jest przykladowy ciag znakow.';
$string_word_count = str_word_count($string, 1); // słów
//$string_word_count = str_word_count($string, 2); znaków

print_r($string_word_count);
*/

// shuffle (mieszanie)
/*
$string = 'Jarek to profesjonalny programista.';
$string_shuffled = str_shuffle($string);

 
 //zastosowanie np w tworzeniu randomowych haseł 
//$string = 'abcdefghijklmnopqrstuvwxyz0123456789';
// wybor np kilku znakow 
$half = substr($string_shuffled, 0, strlen($string)/2);

echo $half;
*/
/*
//stworzenie odwróconej wersji tekstu (wypisanie od tylu)
$string = 'przyklad';
$string_reversed = strrev($string);

echo $string_reversed;
*/

// porównanie procentowe (plagiat taki jakby)
/*
$zdanie1 = 'Ucze sie php o 1 w nocy.';
$zdanie2 = 'Ucze sie programowac w php o 1 w nocy.';

similar_text ($zdanie1, $zdanie2, $result);

echo 'Zdania są podobne wobec siebie w '.$result.'%';
*/

// długość tekstu
/*
$tekst = 'To jest przykladowy tekst o niczym.';
$dlugosc_tekstu = strlen($tekst);

echo $dlugosc_tekstu;
*/
//dodanie ukośników 
/*
$tekst = 'To jest "przykladowy" tekst.';
$tekstowe_kreski = addslashes($tekst);

echo $tekstowe_kreski;
*/
?>