<?php
//arrays - klucze, przypisywanie (kazda wartosc ma swoj klucz numer)
/*
$food = array('Pasta', 'Pizza', 'Salatka', 'Owoc');

//echo $food[1];

//print_r($food);

$food[4]='Banan';

print_r($food);
*/
// Przypisywanie nowych kluczy do już istniejących
/*
$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salatka'=>150, 'Owoc'=>50);

echo $food['Pasta'];
*/
//wielowymiarowy klucz /wieloplaszczyznowy
/*
Zdrowe:
Pasta
Salatka
Owoc
Niezdrowe:
Pizza
Lody

$food = array('Zdrowe:'=>
					array('Salatka', 'Owoc', 'Pasta'),
			  'Niezdrowe:'=>
			  		array('Lody', 'Pizza'));
echo $food['Zdrowe:'][2];
*/

$food = array('Zdrowe'=>
					array('Salatka', 'Owoc', 'Pasta'),
			  'Niezdrowe'=>
			  		array('Lody', 'Pizza'));

foreach($food as $element => $inner_array) {
	echo '<strong>'.$element.'</strong>.<br>';
	foreach($inner_array as $item) {
		echo $item.'<br>';
	}
}
// Robiłem to dwa razy za pierwszym razem wyskakiwał błąd i pokazywało tylko niektore elementy.. co się okazało dopiero po jakimś czasie ogarnąłem że nie wpisało mi się > zamknięcie <br> w 2 foreach'u w echo. Dzięki temu bardziej ogarnąłem o co chodzi w tych kluczach i do czego sie ich używa. (Przydatne.)
?>