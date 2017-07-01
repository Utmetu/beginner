<?php
/* SCRIPT NAME
include 'header.inc.php';

if (isset($_POST['submit'])) {

echo 'Jeden.';
}*/

//HOST NAME

//wszystko w miare ok 
/*
require 'conf.inc.php';
 
//echo '<img src="'.$obrazy.'header.jpg" />';
//echo $_SERVER['PHP_SELF']; // pokazuje sciezke
//echo $_SERVER['SERVER_NAME']; // pokazuje nazwe serwera czyli localhost
//echo $_SERVER['HTTP_HOST']; - to samo co wyzej
echo $_SERVER['HTTP_USER_AGENT']; - wow
*/

//pobieranie adresu ip odwiedzajacego

require 'conf.inc.php';

//echo $ip_address;

foreach($ip_blocked as $ip) {
//echo $ip.'<br>';
	if($ip==$ip_address) {
		die('Twój adres ip: '.$ip_address.' został zablokowany.'); //ogólnie nie działa to u mnie tak jak powinno, xampa mam skonfigorowanego na adres zamiast 127.0.0.1 na ::1 (czytalem na necie o tym ze te adresy to to samo ale nie ogarnalem dokladnie jak to naprawic zeby wyswietlalo to co trzeba). Pewnie gdzieś się jebnąłem na tych pierwszych filmikach. 
	}
}

?>

<h1>Welcome</h1>