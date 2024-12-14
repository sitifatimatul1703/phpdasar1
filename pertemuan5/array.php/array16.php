<?php
$mahasiswa = [
    ["Siti Fatimatul", "0917032009", "Rekayasa Perangkat Lunak
         ", "sitifatimatul@gmail.com"],
    ["ifa indriyani", "0901011999", "Teknik informatika
        ", "indriyaniifa@gmail.com"],
    ["cinta vinza", "1234567890", "Teknik informatika
        ", "vinzacinta@gmail.com"]
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar mahasiswa</title>
</head>

<body>

    <h1>Daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>