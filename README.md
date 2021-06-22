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

# Langkah 6
Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.
![a 11](https://user-images.githubusercontent.com/56380765/122145546-a6d3d100-ce7f-11eb-9469-273962aab164.png)

# Langkah 7
Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false. Kemudian tambahkan method baru pada Controller Page seperti berikut. Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
![a 12](https://user-images.githubusercontent.com/56380765/122145607-bfdc8200-ce7f-11eb-9500-b7d98206b344.png)

# Langkah 8
Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut. Kemudian ubah method about pada class Controller Page menjadi seperti berikut.
![a 13](https://user-images.githubusercontent.com/56380765/122145725-fc0fe280-ce7f-11eb-8e99-45eac16e7edc.png)

seteleh membuat folder template mengubah about.php membuat file style.css maka hasil akhir nya seperti berikut
![a 15](https://user-images.githubusercontent.com/56380765/122146687-b18f6580-ce81-11eb-9cb7-a0179ba09f02.png)
![a 17](https://user-images.githubusercontent.com/56380765/122146728-beac5480-ce81-11eb-9575-4dd1ccbfd0cc.png)

Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

# menu about
![a 20](https://user-images.githubusercontent.com/56380765/122147898-f0beb600-ce83-11eb-9650-0401136121cf.png)

# Menu kontak
![a 21](https://user-images.githubusercontent.com/56380765/122148059-2a8fbc80-ce84-11eb-98b3-a5b6350108d0.png)
```
Fahmi Abdul Muthi
311910463
Univ. Pelita Bangsa
```
# Praktikum 12 - Lanjutan Codeigniter - Pemrograman Web
# Langkah 1 
Membuat Database di localhost
![a 1](https://user-images.githubusercontent.com/56380765/122880002-b497c380-d363-11eb-823a-5881625c98c3.png)

# Langkah 2
Konfigurasi koneksi database
Konfigurasi dapat dilakukan dengan cara mengubah beberapa kode pada file ```htdocs\lab11_php_ci\ci4\.env``` Cari pada line DATABASE lalu ubah dan hilangkan tanda ```#``` Maka jadi seperti ini
![a 2](https://user-images.githubusercontent.com/56380765/122881130-fd9c4780-d364-11eb-82b0-f3bbe68e9ab7.png)

# Langkah 3
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori ```app/Models``` dengan nama ```ArtikelModel.php```
![a 3](https://user-images.githubusercontent.com/56380765/122882305-3c7ecd00-d366-11eb-92ec-8d9823dc8f04.png)

# Langkah 4
Buat Controller baru dengan nama ```artikel.php``` pada direktori ```app/Controllers.```
![a 4](https://user-images.githubusercontent.com/56380765/122882969-e9f1e080-d366-11eb-9816-e386197271eb.png)
Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel
![a 5](https://user-images.githubusercontent.com/56380765/122888034-a8afff80-d36b-11eb-9220-a4f3695bbd4a.png)
Kemudian tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![a 6](https://user-images.githubusercontent.com/56380765/122888403-0b090000-d36c-11eb-8cf9-b0c8c4b4586d.png)
Maka akan muncul tampilan seperti ini ketika browser direfresh.
![a 7](https://user-images.githubusercontent.com/56380765/122888475-1b20df80-d36c-11eb-95a9-fd3abb0275af.png)

# Langkah 5
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller ```Artikel``` dengan nama ```view().```
![a 8](https://user-images.githubusercontent.com/56380765/122889676-317b6b00-d36d-11eb-831a-b7d782822530.png)

# Langkah 6
Buat view baru untuk halaman detail dengan nama ```app/views/artikel/detail.php.```
![a 9](https://user-images.githubusercontent.com/56380765/122889985-7acbba80-d36d-11eb-9f71-0388c6944cb2.png)






