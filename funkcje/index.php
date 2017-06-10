<?php
/*
function mojeimie() {
	echo 'Maciek';
}

echo 'Moje imię to ';
mojeimie();
*/

// Funkcje z argumentami
/*
$inumer1 = 9;
$inumer2 = 11;

function dodaj($numer1, $numer2) {
	echo $numer1 + $numer2;
}

dodaj($inumer1, $inumer2);
*/
// Pokaż Datę funkcja
/*
function pokażdatę ($dzień, $data, $rok) {
	echo $dzień.' '.$data.' '.$rok;
}
pokażdatę('Piątek ',26, 2017);
*/
// Return Value (wartość zwrotna)
/*
function dodaj($numer1, $numer2) {
	$wynik = $numer1 + $numer2;
	Return $wynik;
}
function podziel($numer1, $numer2) {
	$wynik = $numer1 / $numer2;
	Return $wynik;
}

$suma = podziel(dodaj(15, 15), dodaj(3, 8)); // 2.7272727272727
echo $suma;
*/

$user_ip = $_SERVER ['REMOTE_ADDR'];


function echo_ip() {
	global $user_ip;
	$jajko = 'Ta da: '.$user_ip;
	echo $jajko;
}

echo_ip();

?>