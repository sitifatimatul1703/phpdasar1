<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah diubah atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di ubah atau tidak
    if ('Ubah'($_POST) > 0) {

        echo "
        <script>
        alert('data berhasil diubah!');
        dokument.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        dokument.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah data mahasiswa</title>
</head>

<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" ectype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">id : </label>
                <input type="text" name="id" id="id" required value="<?= $mhs["id"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $mhs['gambar']; ?>" width=>"40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type=" submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>
</body>

</html>