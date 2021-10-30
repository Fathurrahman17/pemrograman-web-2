<?php
/**
* Inisialisasi variabel
*/
$nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$prodi = isset($_POST["studi"]) ? $_POST["studi"] : "";
/**
* Menangkap variabel dan data serta menampilkan ke layar
*/
echo "Hai, perkenalkan nama saya : ".$nama."
dengan NIM ".$nim.". Saya adalah seorang
mahasiswa dari program studi ".$prodi;
?>