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
    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
</ul>
</body>
</html>