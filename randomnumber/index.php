<?php
// losowa liczba
/*
$random = rand();
//$maksimum = getrandmax();
//echo $random.' / '.$maksimum;
echo $random;
*/

if (isset($_POST['losuj'])) {
	$random = rand(1, 6);
	echo 'Wylosowałeś liczbę '.$random.'.';
}

?>

<form action="index.php" method="POST">
	
<input type="submit" name="losuj" value="Wylosuj liczbę.">

</form>