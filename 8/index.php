<?php

/*
Filtry są używane do walidacji i oczyszczania zewnętrznych danych wyjściowych.
Rozszerzenie filtra PHP ma wiele funkcji potrzebnych do sprawdzania danych
wprowadzanych przez użytkownika i jest zaprojektowane tak, aby walidacja danych
była łatwiejsza i szybsza.
*/
/*
filter_list() = funkcja można użyć do wylistowania tego co oferuje
rozszerzenie filtra PHP.
filter_var() = zarówno weryfikuje jak i oczyszcza dane.
Filtruje pojedynczą zmienną z określonym filtrem.
*/
/*
Przykład funkcji filter_var() do usunięcia wszystkich znaczników HTML z ciągu:
*/

$str = "<h1>Hello World!</h1>";
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr.'<br>';

/*
Sprawdzenie czy liczba jest liczbą całkowitą:
*/
$int = 100;
if(!filter_var($int, FILTER_VALIDATE_INT) === false){
  echo('Liczba jest liczbą całkowitą!<br>');
}else{
  echo('Liczba nie jest całkowita<br>');
}

/*
Sprawdzenie czy zmienna $ip jest poprawnym adresem IP:
*/
$ip = "127.0.0.1";

if(!filter_var($ip, FILTER_VALIDATE_IP)===false){
  echo('$ip jest IP adresem<br>');
}else{
  echo("$ip nie jest poprawnym adresem IP<br>");
}

/*
Podobnie można zrobić jeżeli chcemy zwalidować e-mail i adres Url
filter_var($email, FILTER_SANITIZE_EMAIL);
filter_var($url, FILTER_VALIDATE_URL);
*/

?>
