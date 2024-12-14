<?php
//$mahasiswa = [
// ["Siti Fatimatul", "0917032009", "sitifatimatul@gmail.com", "Rekayasa Perangkat Lunak" ],
// ["Ifa Indriyani", "0901011999", "indriyaniifa@gmail.com", "teknik informatika" ]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Siti Fatimatul",
    "nrp" => "0917032009",
    "email" => "sitifatimatul@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak"
    ],
    [
        "nama" => "Ifa Indriyani",
        "nrp" => "0901011999",
        "email" => "indriyaniifa@gmail.com",
        "jurusan" => "teknik informatika"
        ]
];
echo $mahasiswa[1]["email"];








?>

</body>
</html>