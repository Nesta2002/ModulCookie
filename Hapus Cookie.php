<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hapus Cookie</title>
  </head>
  <body>
    <?php
      setcookie('nama_cookie', 'nilai_cookie');
      if (isset($_COOKIE['nama cookie'])) {
        echo 'cookie di-set <br/>';

        // Menghapus cookie, dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie', '', time() - 1 * 3600);
        echo 'cookie dihapus';
      } else {
        echo 'unset';
      }
     ?>

     <p>
       Tekan Refersh (F5);
     </p>
  </body>
</html>
