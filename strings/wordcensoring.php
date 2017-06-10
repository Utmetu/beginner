<?php
// Program wywołujący okno dialogowe. Po wpisywaniu tekstu wyszukuje czy w tekście uwzględnione zostały słowa z '$znajdź' i podmienia je na te z '$zamień'. 
/*
$znajdź = array('maciek','jarek','anka');
$zamień = array('m****k','j***k','a**a');

if (isset($_POST['user_input']) &&!empty($_POST['user_input'])) {
	//echo 'Działa.';
 $user_input = $_POST['user_input'];
 //$user_input_lc = strtolower($user_input);
 //$user_input_new = str_replace($znajdź, $zamień, $user_input_lc);
 $user_input_new = str_ireplace($znajdź, $zamień, $user_input);
 echo $user_input_new; 
}
*/
// str_ireplace to funkcja podmieniająca która nie odróżnia wielkości znaków? czyli podmienia zawsze nie patrzac czy jest napisane z dużej czy z małej litery? dobrze to rozumiem? 

?>
<hr>

<form action="wordcensoring.php" method="POST">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br> // wielkosc okna 
<input type="submit" value="Potwierdź"> // przycisk
</form>

// okienko do pisania i wyświetlania na ekranie tekstu.