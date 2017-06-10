<?php
/*
echo 'Witaj ';

die('Jarek :D');

echo 'Świecie :D';
*/

@mysql_connect('localhost','root','') or die ('Nie można połączyć się z bazą!'); // lub or exit

echo 'Połączono.';

?>