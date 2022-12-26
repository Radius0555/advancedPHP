<?php
/*
Plik cookie jest czsęsto używany do identyfikacji użytkownika.
Cookie to mały plik który server osadza na komputerze użytkownika.
Za każdym razem gdy ten sam komputer zażąda strony z przeglądarką,
wyśle również plik cookie.
Dzięki PHP możesz zarówno tworzyć, jak i pobierać wartości plików cookie.
*/
/*
setcookie() = funkcja tworzy plik cookie.
setcookie(nazwa, wartość, wygaszenie, ścieżka, domena, bezpieczne, httponly);
*/
/*
Aby zmodyfikować plik cookie wystarczy ustawić ponownie plik
cookie za pomocą setcookie().
Aby usunąć plik cookie należy użyć setcookie() z datą ważności w przeszłości.
*/
/*
funkcja setcookie() musi pojawić się PRZED znacznikiem <htmnl>
*/

$cookieName = 'user';
$cookieValue = 'RadFol';
setcookie($cookieName, $cookieValue, time()+(86400*30),"/");

?>
<html>
<body>
<?php
  if(!isset($_COOKIE[$cookieName])){
    echo 'Nazwa ciasteczka: "'.$cookieName.'" nie jest ustawiony';
  }else{
      echo 'ciasteczko: "'.$cookieName.'" został ustawiony<br>';
      echo 'Wartość ciasteczka to: '.$_COOKIE[$cookieName];
  }
?>
