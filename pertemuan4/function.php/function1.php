<?php
function salam($nama)
{
    return "Selamat Datang, $nama!";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title> Latihan Function</title>
</head>

<body>
    <h1><?= salam("Fatim"); ?></h1>
</body>

</html>