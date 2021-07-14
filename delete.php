<?php
// koneksi database
include 'config.php';

//\Menangkap data id yang dikirim dari url karena delete cuma membutuhkan id
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from buku where id='$id'");

// mengalihkan halaman kembali ke home.php
header("location:home.php");
