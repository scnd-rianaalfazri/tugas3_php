<?php

$jarak = 360; // dalam Km
$kecepatan = 90; // dalam Km/jam

$waktu_jam = $jarak / $kecepatan;

// Konversi ke menit
$waktu_menit = $waktu_jam * 60;

// Tampilkan hasil
echo "Jarak kota A - Z    : " . $jarak . " Km <br>";
echo "Kecepatan motor     : " . $kecepatan . " Km/jam <br>";
echo "Waktu tempuh (jam)  : " . $waktu_jam . " jam <br>";
echo "Waktu tempuh (menit): " . $waktu_menit . " menit <br><br>";
echo "Jawaban: " . $waktu_menit . " Menit";

?>