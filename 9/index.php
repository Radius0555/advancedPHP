<?php

/*
Klika innych przykładów filter_var() do sprawdzenia.
Pierwszy czy zmienna jest typu INT, oraz czy jest między 1 a 200
*/
$int = 122;
$min = 1;
$max = 200;

if(filter_var($int, FILTER_VALIDATE_INT, array('options'=>
array('min_range'=>$min, "max_range"=>$max))) === false){
  echo('Wartość zmiennej poza dopuszczalnym zakresem!<br>');
}else{
  echo('Wartość zmiennej mieści się w dopuszczalnym zakresie<br>');
}

/*
Sprawdź poprawność adresu IPv6:
*/
$ip = '2001:0db8:85a3:08d3:1319:8a2e:0370:7334';
if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false){
  echo('$ip jest prawidłowym adresem IPv6<br>');
}else{
  echo('$ip nie jest prawidłowym adresem IPv6<br>');
}

?>
