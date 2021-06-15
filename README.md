# lab11Web
# Praktikum 11
```
Fahmi Abdul Muthi
311910463
TI.19.A2
Universitas Pelita Bangsa
```
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.
Berikut beberapa ekstensi yang perlu diaktifkan:
• php-json ekstension untuk bekerja dengan JSON;
• php-mysqlnd native driver untuk MySQL;
• php-xml ekstension untuk bekerja dengan XML;
• php-intl ekstensi untuk membuat aplikasi multibahasa;
• libcurl (opsional), jika ingin pakai Curl.
# langkah 1

Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian
Apache klik Config -> PHP.ini![a 1](https://user-images.githubusercontent.com/56380765/122131443-62d2d300-ce63-11eb-8bbe-225b0130bab8.png)

Lalu pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan seperti berikut. Kemudian simpan kembali filenya dan restart Apache web server. 
![a 2](https://user-images.githubusercontent.com/56380765/122131587-96156200-ce63-11eb-948d-409ae0423827.png)

# Langkah 2
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.
• Unduh Codeigniter dari website https://codeigniter.com/download
• Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
• Ubah nama direktory framework-4.x.xx menjadi ci4.
• Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/
![a 4](https://user-images.githubusercontent.com/56380765/122131692-c1984c80-ce63-11eb-9d79-5d74d77acb44.png)

# langkah 3
Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt, lalu arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (C:\xampp\htdocs\Lab11_php_ci\ci4). Kemudian setelah itu jalankan perintah untuk memanggil CLI Codeigniter
![a 5](https://user-images.githubusercontent.com/56380765/122131785-e7255600-ce63-11eb-837d-d38211af0278.png)

# Langkah 4
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif.
Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable ```CI_ENVIRONMENT menjadi development.```Kemudian mengubah nama file env menjadi ```.env``` lalu setelah itu buka file tersebut dan ubah nilai variable CI_ENVORNMENT menjadi development. Setelah mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. maka hapus tanda tagar (#) pada awal baris CI_ENVIRONMENT. Dan yang terakhir, ubah kode pada file ```app/Controller/Home.php``` kemudian hilangkan titik koma (;) pada akhir kode seperti berikut
![a 6](https://user-images.githubusercontent.com/56380765/122132408-fe187800-ce64-11eb-8992-d24a79847cb5.png)
hasil nya menjadi eror seperti berikut
![a 7](https://user-images.githubusercontent.com/56380765/122132456-14becf00-ce65-11eb-9080-cf0847088582.png)

# Langkah 5
Membuat Route Baru.
Menambahkan kode di dalam Routes.php seperti berikut.
![a 8](https://user-images.githubusercontent.com/56380765/122133199-76336d80-ce66-11eb-8bac-1a48a1c801fb.png)
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.
![a 9](https://user-images.githubusercontent.com/56380765/122133244-88151080-ce66-11eb-9236-7965abbb5435.png)



