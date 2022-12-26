<?php

//fopen() - metoda do otwierania plików.
//Daje więcej opcji niż readfile()
//fopen("plik","parametr")

$myfile = fopen("test.txt","r") or die("Nie można otworzyć pliku!");
echo fgets($myfile).'<br><br>';
echo fread($myfile,filesize("test.txt")).'<br><br>';
fclose($myfile);

/*
r = otwórz tylko do odczytu, wskaźnik na początku
w = otwórz tylko do zapisu,
wymazuje zawartość pliku lub tworzy nowy plik jeżeli go nie ma.
wskaźnik pliku zaczyna się na początku.
a = otwórz plik tylko do zapisu.
Istniejące dane w pliku są zachowane, tworzy nowy jeśli plik nie istnieje
Wskaźnik zaczyna się na końcu
x = tworzy nowy plik tylko do zapisu. zawraca FALSE i błąd jeżeli plik już istnieje
r+ = otwórz plik do odczytu/zapisu. Wskaźnik pliku zaczyna się na początku pliku
w+ = otwórz plik do odczytu/zapisu.
Wymazuje zawartość pliku lub tworzy nowy plik, jeżeli nie istnieje
Wskaźnik na początku
a+ = otwórz plik do odczytu/zapisu.
Istniejące dane są zachowane.
Wskaźnik pliku zaczyna się na końcu pliku.
Tworzy nowy plik, jeśli plik nie istnieje
x+ = tworzy nowy plik do odczytu/zapisu. zwraca FALSE i błąd,
jeśli plik już istnieje

fread("pierwszy parametr","drugi") = czyta z otwartego pliku
pierwszy parametr zawiera nazwę do odczytu
drugi określa maksymalną liczbę bajtów do odczytania

fclose("plik do zamknięcia") = służy do zamykania otwartego pliku

fgets("plik") = odczyt pojedyńczej linii z pliku.
Po wykonaniu wskaźnik zostanie przeniesiony do następnej lini
*/

$myfile = fopen("test.txt","r") or die("Nie można otworzyć pliku!");
while(!feof($myfile)){
  echo fgets($myfile).'<br>';
}
fclose($myfile);
/*
feof() = sprawdza czy osiągnięto końca pliku.
Jest przydatna do przeglądania danych o nieznanej długości.
*/

?>
