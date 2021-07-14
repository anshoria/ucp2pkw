<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Buku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Data Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    //memanggil file config.php
    include './config.php';
    //menangkap id yang dikirim melalui button detail di home.php
    $id= $_GET['id'];
    //melakukan query untuk mendapatkan data buku berdasarkan $id
    $buku = mysqli_query($koneksi, "select * from buku where id='$id'");
    while ($data = mysqli_fetch_assoc($buku)){
    ?>
        <div class="container mt-5">
            <p><a href="home.php">Home</a> / Edit Buku / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Infromasi Buku</p>
                </div>
                <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input nama -->
                            <label for="nama" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama" value="<?php echo $data['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input kategori -->
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="NIM" value="<?php echo $data['kategori']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input penerbit -->
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Penerbit Buku" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input harga -->
                            <label for="harga" class="form-label">harga</label>
                            <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Buku" name="harga" value="<?php echo $data['harga']; ?>">
                        </div>
                        <div class="mb-3">
                            <!-- input diskon -->
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="text" class="form-control" id="diskon" placeholder="Masukkan Diskon Buku" name="diskon" value="<?php echo $data['diskon']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>