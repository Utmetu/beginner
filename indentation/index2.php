<?php
$imie = 'Maciek';
$wiek = 22;
if (strtolower($imie)==='maciek')  {
	if ($wiek>=22) {
		echo "Masz więcej niż 22 lata.";
		if (1===1) {
			echo "Tak. 1 to jest to samo co 1!";
		}
	} else {
			echo "Nie więcej jak 22.";
		}
} else {
echo "Ty nie jesteś Maciek!";
}
?>