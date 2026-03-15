<?php
include "Mahasiswa.php";

print_r("Data Mahasiswa : <br><br>");
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2024.15577', 'Iqbal Ulul Albab', 'Teknik Informatika');
print_r($mahasiswaTI->getData());

echo "<br>";

// Objek baru 1
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2000.00002', 'Fulan', 'Sistem Informasi');
print_r($mahasiswaSI->getData());

echo "<br>";

// Objek baru 2
$mahasiswaDKV = new Mahasiswa();
$mahasiswaDKV->setData('A11.2000.00003', 'Fulanah', 'Desain Komunikasi Visual');
print_r($mahasiswaDKV->getData());

echo "<hr>";

// Menampilkan data dengan method baru
$mahasiswaTI->tampilMhs();
$mahasiswaSI->tampilMhs();
$mahasiswaDKV->tampilMhs();
?>