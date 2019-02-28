<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hapus Session</title>
  </head>
  <body>
    <?php
      // Inisialisasi data session
      session_start();
      // set session jika belum ada
      if (isset($_SESSION['test'])) {
        // hapus session test
        unset($_SESSION['test']);
        echo 'session dihapus';
      } else {
        echo 'unset';
        // mencetak semua elemen session
        print_r($_SESSION);
      }
     ?>
     <p>
       Tekan Refresh (F5);
     </p>
  </body>
</html>
