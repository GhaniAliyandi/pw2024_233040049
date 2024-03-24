<?php
//Array Associative
// devinisinya sama seperti arraynumerik, kecuali
// key-nya adalah strin yang kita buat sendiri
$mahasiswa = [
[
"nama" => "Ghani Aliyandi",
"nrp" => "233040049",
"email" => "ghanialiyandi12345@gmail.com",
"jurusan" => "Teknik infirmatika",
"gambar" => "jpg"
],
[
"nama" => "Moh Hilmy Yasirurrizqy",
"nrp" => "233040047",
"email" => "hilmi@gmail.com",
"jurusan" => "Teknik infirmatika",
"gambar" => "jpg"
],
[
"nama" => "Ikhwan Azhary",
"nrp" => "233040060",
"email" => "ikhwan@gmail.com",
"jurusan" => "Teknik infirmatika",
"gambar" => "jpg"
],
[
"nama" => "Zaki Ramadhan Wijaya",
"nrp" => "233040056",
"email" => "zaki@gmail.com",
"jurusan" => "Teknik infirmatika",
"gambar" => "jpg"
],
[
"nama" => "Najran Al-faresy",
"nrp" => "233040127",
"email" => "najran@gmail.com",
"jurusan" => "Teknik infirmatika",
"gambar" => "jpg"
],
[
"nama" => "Nadhil",
"nrp" => "233040038",
"email" => "debay@gmail.com",
"jurusan" => "Teknik infirmatika",
"gambar" => "jpg"
],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?=$mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"];?></li>
            <li>Nrp: <?= $mhs["nrp"];?></li>
            <li>Email: <?= $mhs["email"];?></li>
            <li>Jurusan: <?= $mhs["jurusan"];?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>~~