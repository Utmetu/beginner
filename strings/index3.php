<?php

$offset = 0;

if (isset($_POST['text']) &&isset($_POST['znajdźdla']) &&isset($_POST['zamieńz'])) { 
 $text = $_POST['text'];
 $znajdź = $_POST['znajdźdla'];
 $zamień = $_POST['zamieńz'];

 $znajdź_długość = strlen($znajdź);

if (!empty($text)&&!empty($znajdź)&&!empty($zamień)) {
	
while ($strpos = strpos($text, $znajdź, $offset)) {
	//echo $strpos.'<br>';
	$offset = $strpos + $znajdź_długość; //offset - pozycja od której zaczyna zliczać wartości do następnej pozycji w której "skończy się" wyszukiwane słowo.
	$text = substr_replace($text, $zamień, $strpos, $znajdź_długość);
}

echo $text; // wyświetla tekst z głównego okna, ale juz po zmianach, czyli po znalezieniu wyrazu/wyrazów i po podmianie ich.

} else {
	echo 'Uzupełnij wymagane pola!'; // jeśli pola są puste, wyświetl komunikat 
}

}
// to poza, to jest stworzenie okienek i przycisku. 
?>

<form action="index3.php" method="POST">
<textarea name="text" rows="6" cols="30"></textarea><br><br>
Znajdź dla: <br>
<input type="text" name="znajdźdla"><br><br>
Zamień z: <br>
<input type="text" name="zamieńz"><br><br>
<input type="submit" value="Znajdź i Zamień.">
</form>