# ModulCookie
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(242).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(243).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(244).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(245).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(246).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(247).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(248).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(249).png)
![alt text](https://github.com/Nesta2002/ModulCookie/blob/master/Screenshot%20(250).png)

1. Jelaskan menggunakan bahasa sendiri perbedaan antara cookies dan session! 
Cookie
-Cookies disimpan di sisi klien
-Cookies tidak aman bagi klien karena cookies dapat disisipi program yang tidak diketahi klien.
Karena cookies tidak aman maka browser klien dapat di-set untuk menghapus cookies dan bahkan men-disable fungsi cookies. Menurut sumber lain cookies juga tidak aman bagi sisi server karena cookies dapat di-edit oleh klien.
-Data yang disimpan ke dalam metode cookies dapat bertahan lebih lama dan dapat diatur waktu expired-nya.
Session
-Disimpan disisi server
-Lebih aman karena tidak ada file yang dimasukan ke sisi klien
-Setelah web browser klien dimatikan maka data yang disimpan metode session akan hilang dan waktu expired juga tidak dapat diatur.

2. Bagaimana cara menghapus session dan cookies pada sebuah browser! 
Cookie = Mengirimkan nama cookie sama tetapi nilainya kosong.
Session = Menggunakan konstruksi bahasa unset atau fungsi session.

3. Berikan contoh kode dari pembuatan dan menghapus cookies dan session!
Cookie
-PHP menyediakan fungsi setcookie() yang digunakan untuk menetapkan nilai cookie. Adapun untuk mendapatkan nilai cookie, kita memanfaatkan variabel superglobal $_COOKIE. <
-setcookie('nama_cookie', '', time() - 1 * 3600); 
Session
-PHP menyediakan fungsi session_start() yang harus selalu dipanggil sebelum kita dapat menetapkan maupun mengakses variabel session. Adapun untuk menetapkan nilai variabel session, kita menggunakan superglobal $_SESSION.  
-Untuk menghapus data session, Anda bisa menggunakan konstruksi bahasa unset() atau fungsi session_destroy().  
<
