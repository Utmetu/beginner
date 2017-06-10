<?php

//Strings

/*
 //1. String length - długość ciągu znaków
// Zliczanie ilości znaków z których składa się tekst, oraz wypisywanie ich wartości (czyli jeśli mamy 5 znaków to wypisze 1,2,3,4,5.)

$string = 'Maciek';
$string_length = strlen($string);

for($x=1;$x<=$string_length;$x++) {

echo $x.'<br>';

	}
//echo $string_length;
*/

 //2. Upper/Lower case conversion - konwersja z małych znaków na duże i odwrotnie 
/*
$string = 'Wszystko Jest Wszystkim.';

$stringlower = strtolower($string);
$stringupper = strtoupper($string);

echo $stringupper;
*/
// Program sprawdza wielkość liter i wyświetla na ekranie zdanie, dopiero gdy ciąg znaków pokryje się z wartością $user_name. $user_name_lower_case sprawia, że nie ważne jak napiszemy wyraz znajdujący się w $user_name, jeśli pokrywa się z wartością - wyświetli echo. 
if (isset($_GET['user_name']) &&!empty($_GET['user_name'])) {
	$user_name = $_GET['user_name'];
	$user_name_lower_case = strtolower($user_name);

	if ($user_name_lower_case=='maciek') {
		echo $user_name.' programuje PHP o 1 w nocy!';
	}
}

?> 

<form action="index.php" method="GET">
	Name: <input type="text" name="user_name"><br><br>
	<input type="submit" name="Submit">
</form>