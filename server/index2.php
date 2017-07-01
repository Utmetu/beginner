<?php
//Lepszy sposob na zdobycie adresu ip 


$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; //sprawdza aktualne ip 

$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];// do sprawdzania czy ktoś używa proxy? 

$remote_addr = $_SERVER['REMOTE_ADDR']; //Adres IP, z którego użytkownik wyświetla obecną stronę.

if (!empty($http_client_ip)) { // jesli aktualne ip nie jest puste to przypisuje do $ip_address to ip.
	$ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {//w przeciwnym wypadku, jeśli nie jest puste ^ (czyli użytkownik używa proxy? o to chodzi?) to adres ip przypisuje sobie wartość z tej komendy.
	$ip_address = $http_x_forwarded_for;
} else { // w calkowicie innym przypadku przypisuje adres ip z ktorego uzytkownik wyswietla obecna strone.
	$ip_address = $remote_addr;
}

echo $ip_address;

//a i w 5 i 7 kolumnie wyswietla mi blad ze nie sa te komendy zdefiniowane:Notice: Undefined index: HTTP_CLIENT_IP in D:\XAMPP\htdocs\series\server\index2.php on line 5


?>