<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Session</title>
  </head>
  <body>
    <?php
      // Inisialisasi data session
      session_start();
      // Set Session jika belum ada
      if (!isset($_SESSION['test'])) {
        $_SESSION['test'] = 'value';
      } else {
        echo 'Session di-set <br/>';
        // Mencetak nilai session test
        echo 'Nilai: ' . $_SESSION['test'] . '<br/>';

        // Mencetak semua elemen session
        print_r($_SESSION);
      }
     ?>
     <p>
       Tekan Refresh (F5);
     </p>
  </body>
</html>
