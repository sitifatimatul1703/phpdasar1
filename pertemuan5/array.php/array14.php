<?php
$mahasiswa = [
    ["Siti Fatimatul", "0917032009", "Rekayasa Perangkat Lunak
         ", "sitifatimatul@gmail.com"],
    ["ifa indriyani", "0901011999", "Teknik informatika
        ", "indriyaniifa@gmail.com"]
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
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>