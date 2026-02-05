<?php


$lokasi = array("Tanggerang", "Bogor", "Jakarta", "Depok", "Bekasi");
sort($lokasi);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .container {
            display: flex;
            justify-content: space-around;

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BOLU CAKE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">


        <div class="image">
            <img src="assets/images/logo.jpg" alt="Bento Cake" width="200px" height="200px">
        </div>


        <div class="isian">
            <div class="mb-3">
                <label for="namapelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="namapelanggan" placeholder="Masukkan nama pelanggan">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nohp" placeholder="Masukkan nomor HP">
            </div>
            <div class="mb-3">
                <label for="jumlahpesanan" class="form-label">Jumlah Pesanan</label>
                <input type="text" class="form-control" id="jumlahpesanan" placeholder="Masukkan jumlah pesanan">
            </div>

            <div class="mb-3">
                <label for="lokasipengiriman" class="form-label">Lokasi Pengiriman</label>
                <select class="form-select" id="lokasipengiriman">
                    <option selected>- Pilih lokasi -</option>
                    <?php
                    foreach ($lokasi as $kota) { ?>
                        <option value="<?= $kota ?>"><?= $kota ?> </option>
                    <?php } ?>
                </select>

            </div>
            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>