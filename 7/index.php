<?php

/*
Sesja przechowuje informacje o użytkowniku, które mają być
używane na wielu stronach (np. nazwa użytkownmika itp.).
Domyślnie sesja trwa do momentu zamknięcia przeglądarki
przez użytkownika.
Zmienne sesji przechowują informacje o jednym użytkowniku
i są dostępne dla wszystkich stron w jednej aplikacji.
*/
/*
session_start() = uruchamia sesje.
Musi być pierwszą rzeczą w twoim dokumencie przed wszelkimi tagami HTML
$_SESSION = przechowuje zmienne sesji.
*/

session_start();

?>
<!DOCTYPE html>
<html>
<body>
  <?php
    $_SESSION['color'] = 'blue';
    $_SESSION['animal'] = 'dog';
    echo 'Ulubiony kolor to: '.$_SESSION['color'].'<br>';
    echo 'Ulubiony gatunek zwierząt to: '.$_SESSION['animal'].'.';
    echo '<br><br>';
/*
Można wyświtlić i tak:
*/
  print_r($_SESSION);

  /*
  Aby zmienić wartość zmiennej sesji po prostu ją nadpisujemy
  */
  $_SESSION['color'] = 'green';
  echo '<br>Drugi ulubiony kolor: '.$_SESSION['color'].'<br>';
  /*
    unset($_SESSION[nazwa_zmiennej]) = usuwa zmienną sesyjną
    session_unset() = usuwa wszystkie zmienne sesji
    session_destroy() = niszczy sesje
  */
  ?>
</body>
</html>
