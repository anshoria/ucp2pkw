<?php
// Include koneksi database
include './config.php';

// Menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

// Menginput data ke database
mysqli_query($koneksi, "insert into buku values('','$nama','$kategori','$penerbit','$harga','$diskon')");
// Mengembalikan ke halaman awal
header ("Location:./home.php");
