<?php
/*
$numer = 2;

switch ($numer) {
	case 1:
		echo 'Jeden';
		break;
	case 2:
		echo 'Dwa';
		break;
	case 3:
		echo 'Trzy';
		break;

default:
echo 'Nie ma takiego numeru.';
break;
}
*/

$dzień = 'Poniedziałek';

switch ($dzień) {
	case 'Sobota':
	case 'Niedziela':
		echo 'To jest weekend.';
	break;

	default:
	echo 'To nie weekend!';
	break;

}

?>