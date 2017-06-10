<?php
/*
// preg_match(pattern, subject); (funkcja wyszukująca coś w czymś)

$string = 'To jest coś.';
if (preg_match('/ /', $string)) {

echo 'Znaleziono.';

}	else {

echo 'Nie znaleziono.';

}
*/
// Sprawdza czy w danym tekscie jest spacja czy jej nie ma 
function has_space($string) {

if (preg_match('/ /', $string)) {
	return true;
	} else {
	return false;
	}
}

$string = 'Tu nie ma spacji.';

if (has_space($string)) {

echo 'Jest przynajmniej jedna spacja.';
} else {
echo 'Nie ma żadnej spacji!';
}
?>