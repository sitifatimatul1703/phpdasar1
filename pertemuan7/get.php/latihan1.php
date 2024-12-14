<?php
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
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="Latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li> 
        <?php endforeach; ?>
    </ul>
</body>
</html>