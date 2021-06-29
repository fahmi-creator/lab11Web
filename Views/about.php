<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
            <img src="fahmi.png" title="Fahmi Abdul muthi" alt="Fahmi Abdul Muthi" class="image-circle" width="200" style="float: left; border: 2px solid black;">
            <h1>Fahmi Abdul muthi</h1>
            <p>Nama saya Fahmi Abdul muthi, Saya adalah seorang mahasiswa Universitas Pelita Bangsa Jurusan Teknik Informatika. Saya lahir di Bekasi, 28 Agustus 2001.
            hobi saya bermain futsal.
            </p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
