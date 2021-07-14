<?php
//koneksi database
include './config.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

// update data ke database 
mysqli_query($koneksi, "update buku set nama='$nama', kategori='$kategori', penerbit='$penerbit', harga='$harga', diskon='$diskon', where id='$id'");

// mengalihkan halaman kembali ke home.php
header("location:home.php");
