<?php
// $_GET
var_dump($_GET);
$mahasiswa = [
    [
    "nrp" => "0917032009",
    "nama" => "Siti Fatimatul",
    "email" => "sitifatimatul@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "gambar" => "fatim.jpg"
    ],
    [
        "nama" => "Ifa Indriyani",
        "nrp" => "0901011999",
        "email" => "indriyaniifa@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "indriyani.jpg"
        ]
];
?>
<!DOCTYPE html>
<html>
<head>
        <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
    <li>img src="img/<?= $mhs["gambar"]; ?></li>
    <li><?= $mhs["nama"]; ?></li>
    <li><?= $mhs["nrp"]; ?></li>
    
    </ul>

        <? endforeach; ?>
</body>
</html>