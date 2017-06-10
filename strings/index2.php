<?php
/*
// string position

$offset = 0;

$znajdz = 'jest'; //szukany wyraz
$znajdz_dlugosc = strlen ($znajdz); // funkcja obliczajaca dlugosc wyrazu w rubryce $znajdz i szukająca go w tekście $string

$string = 'To jest zdanie, jest to przykładowe zdanie.';

//echo strpos($string, $znajdz); // funkcja znajdująca tak jakby pierwsza literę wyrazu który wyszukujemy, i wyświetlająca jej wartość w zdaniu (pozycję w tym przypadku jest to pozycja 3)
//po dodaniu do echo strpos trzeciej wartości można wyznaczyć od którego miejsca ma szukać wyrazu który szukamy.np:
//echo strpos($string, $znajdz, 10);

while ($string_position = strpos($string, $znajdz, $offset)) {

echo 'Wyraz '.$znajdz.' znaleziono w '.$string_position.'<br>';
$offset = $string_position + $znajdz_dlugosc; // offset sprawia że program się nie zapętla, przez co pokazuje tylko raz to co znajduje. 
}
*/
/*
// 2.
// replacing part of a string (podmiana jakiejś części zdania na inną, taką którą zechcemy)

$string = 'Tu nie ma nic. Tu jest coś.'; // zdanie na którym pracuję
$string_new = substr_replace($string, 'może być', 18, 4); // składnia polecenia, $string - tekst, 'może być' - tekst którym chcę zastąpić tekst z powyższego zdania, 18 - wartość miejsca początkowego zdania które ma być podmienione, 4 - długość zdania które ma być podmienione

echo $string_new; // wywołanie.
*/
$znajdz = array('kurde','głupek','pierdziel'); // wyszukuje to w tekście

$zamien = array ('*****','******','*********'); // zamienia na gwiazdki w tym przypadku 

$string = 'To jest przykładowe kurde zdanie do zadania. Weź nie pierdziel! Co kurde Ty tutaj robisz? Ja pierdziele, co za głupek!';

$new_string = str_replace($znajdz, $zamien, $string); // funkcja wykorzystująca znajdowanie i podmienianie "niechcianych" wyrazów na inne

echo $new_string;
//echo $string;
?>