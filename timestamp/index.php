<?php
/*
// echo time();  

$czas = time();
$aktualnyczas = date('H:i:s D M Y', $czas);

echo 'Teraz jest '.$aktualnyczas;
*/

// zmiany w czasie (dodawanie odejmowanie wyswietlanego czasu i takie tam)

$czas = time();
$aktualnyczas = date('H:i:s d M Y', $czas);
$czaszmodyfikowany = date('H:i:s d M Y', strtotime('+5 week'));
//$czaszmodyfikowany = date('H:i:s d M Y', $czas-(3*4*2));
echo 'Aktualny czas to '.$aktualnyczas.'<br>';

echo 'Zmodyfikowany czas to '.$czaszmodyfikowany;

?>