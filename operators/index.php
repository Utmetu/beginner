<?php

// 1. Operatory Przypisania

/*$numer1 = 15;
//Różne możliwości:
//$numer1 += 3; 
//$numer1 -= 3; 
//$numer1 *= 3;
//$numer1 /= 3;
//$numer1 %= 3;  
//echo $numer1; 

//tekst również:
$text = 'Witaj';
$text .= ' Świecie :D';

echo $text; //no i zawsze echo do wyświetlenia.
*/

// 2. Operatory Porównania
/*
$numer1 = 11;
$numer2 = 5;

if ($numer1>=$numer2) {
	echo 'Zgadza się.';
} else {
	echo 'Nie zgadza się!';
}
*/

// 3. Operatory Matematyczne/Arytmetyczne
// +, -, *, /, Modułowe: ++, --;
/*
$numer1 = 18;
$suma = 10 + 20;
$różnica = $suma - 10;
$mnożenie = $numer1 * $suma;
$dzielenie = $mnożenie / 2;

//echo ($suma, $różnica, $mnożenie, $dzielenie); //wybór
*/

// modulo (inkrementacja (dodać 1), dekrementacja (odjąć 1), modulo n (czyli reszta z dzielenia)):
/*
$numer1 = 100;
$numer2 = 7;
$wynik1 = $numer1%$numer2;
$wynik2 = $numer1++;
$wynik3 = $numer1--;

echo $wynik1; // lub $wynik2, $wynik3
*/

// 4. Operatory Logiczne: and(&&, AND), or(||, OR), not(!).

// a.

/*
$numer = 777;
$górny = 1000;
$dolny = 300;

if ($numer>=$dolny && $numer<=$górny) {
	echo 'Zgadza się!';
} else {
echo 'Numer musi być pomiędzy '.$dolny.' i '.$górny;
}
*/

// b.
/*
$numer = 2;

$canbe1 = 2;
$canbe2 = 4;
// if ($numer==$canbe1||$numer==$canbe2) 
if (!($numer==$canbe1)||!($numer==$canbe2)) {
	echo 'Ok.';
} else {
echo 'Nie za dobrze.';
}
*/

// 5. Triple equals - potrójne równe (używamy gdy chcemy sprawdzić czy dane "dane" są tego samego typu?)

$n1 = '1';
$n2 = 1;

if ($n1===$n2) {
	echo 'Są równe.';
} else {
	echo 'Nie są równe.';
}

?>