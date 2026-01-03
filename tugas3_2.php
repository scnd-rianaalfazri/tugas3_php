<?php

$tabungan_awal = 150000; // dalam Rupiah
$bunga_persen = 12.5; // dalam persen

// Hitung bunga dalam rupiah
$bunga_rupiah = $tabungan_awal * ($bunga_persen / 100);

// Hitung total tabungan setelah 1 tahun
$total_tabungan = $tabungan_awal + $bunga_rupiah;

// Fungsi format rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Tampilkan hasil
echo "Tabungan Awal        : " . formatRupiah($tabungan_awal) . "<br>";
echo "Bunga Setahun        : " . $bunga_persen . "<br>";
echo "Bunga dalam Rupiah   : " . formatRupiah($bunga_rupiah) . "<br>";
echo "Total Tabungan       : " . formatRupiah($total_tabungan) . "<br><br>";
echo "Jawaban: " . formatRupiah($total_tabungan);

?>