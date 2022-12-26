<?php

/*
Sprawdzenie czy pliki cookie są włączone.
*/
setcookie('testCookie','test',time()+3600,'/');
?>

<html>
<body>
  <?php
    if(count($_COOKIE)>0){
      echo 'Cookies jest włączone.';
    }else{
      echo 'Cookies are disabled.';
    }
  ?>
</body>
</html>
