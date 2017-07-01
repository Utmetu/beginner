<?php
//ob_start
ob_start(); //jesli wywala błąd strony to się tego używa, dobrze rozumiem?
?>
<h1>Moja strona</h1>
To jest moja strona :D
<?php
//Używanie nagłówka do wymuszenia przekierowania strony

$s2 = 'http://google.com'; // strona na którą robę przekierowanie
$s1 = false; // przekierowanie

if ($s1==true) {
header('Location: '.$s2); // jestem debilem.. przez 20 minut kminilem czemu nie robi przekierowania, okazalo się że Location musi być po angielsku (pisząc lokacja nic sie nie działo) :| 
} else print 'błąd 404';

ob_clean(); //czysci wszystko i wyswietla pusta strone
//ob_end_flush(); // jeżeli chcemy wyswietlic cos na stronie w przypadku braku przekierowania to sie uzywa ob_start i ob_flush? bo w przypadku przekierowania jako true normalnie przekierowuje.  
?>