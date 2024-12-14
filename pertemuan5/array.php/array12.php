<?php
$mahasiswa = ["Siti Fatimatul", "0917032009", "Rekayasa Perangkat Lunak", "sitifatimatul@gmail.com"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar mahasiswa</title>
</head>

<body>

    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>