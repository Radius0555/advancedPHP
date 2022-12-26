<?php

/*
Można dołączyć dane do pliku 'test.txt' dzięki atrybutowi 'a',
Tryb 'a' dołącza tekst na końcu pliku. 
*/

$file = fopen('test.txt','a') or die("Nie mogę otworzyć pliku!");
$txt = "Donald Duck\n";
fwrite($file, $txt);
$txt = "Goofy Goof\n";
fwrite($file, $txt);
fclose($file);
?>
