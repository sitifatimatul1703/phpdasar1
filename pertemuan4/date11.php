<?php
// Date
// untuk menampilkan tanggal dengan format tertentu
//echo date("l, d-M-Y");

//time
// UNIX timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
//echo date("l", time()-60*60*24*100);

// mktime sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,3,17,2029));
?>