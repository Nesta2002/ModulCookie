<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Cookie</title>
  </head>
  <body>
    <?php
      // Men-set nilai Cookie
      setcookie('nama_cookie', 'nilai_cookie');
      // Mendapatkan nilai Cookie
      echo $_COOKIE['nama_cookie'];
     ?>

     <p>
       Tekan Refresh (F5);
     </p>
  </body>
</html>
