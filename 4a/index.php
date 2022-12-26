<?php

/*
Funkcja 'fwrite()' służy do zapisu pliku.
Gdy otworzymy istniejący plik do zapisu.
Wszystkie istniejące dane zostaną USUNIĘTE i zaczniemy od pustego pliku.
W przykładzie otworzymy plik 'test.txt' i zapiszemy nowe dane:
*/

$file = fopen("test.txt","w") or die ("Nie ma pliku");
$txt = "Mickey Mouse\n";
fwrite($file, $txt);
$txt = "Minnie Mouse\n";
fwrite($file, $txt);
fclose($file);
?>
