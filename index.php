<?php

    //panggil koneksi
    include "backend/koneksi.php";

?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body>


  <div class="container">
    <div class="mt-3">
        <h3 class="text-center"> BONG TAILOR </h3>
        <h3 class="text-center"> CRUD </h3>
    </div>
    
    <div class="card mt-3">
  <div class="card-header bg-primary text-white">
        Data Pesanan BONG TAILOR
  </div>
  <div class="card-body">

  <!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
  Tambah Data
</button>

        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>No.</th> 
                <th>ID Pesanan</th>
                <th>ID Pelanggan</th>
                <th>ID Admin</th>
                <th>Nama Pelanggan</th>
                <th>tanggal Pesanan</th>
                <th>Catatan</th>
                <th>Status Pesanan </th>
                <th>Total Harga</th>
                <th>Jenis Pesanan</th>
                <th>Aksi </th>
            </tr>

                    <?php
                        //persiapan
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id_pesanan DESC");
                        while ($data = mysqli_fetch_array($tampil)) :
                    ?>
        
            <tr>
                <td> <?= $no++ ?> </td> 
                <td> <?= $data['id_pesanan'] ?> </td>
                <td> <?= $data['id_pelanggan'] ?> </td>
                <td> <?= $data['id_admin'] ?> </td>
                <td> <?= $data['nama_pelanggan'] ?> </td>
                <td> <?= $data['tanggal_pesanan'] ?> </td>
                <td> <?= $data['catatan'] ?> </td>
                <td> <?= $data['status_pesanan'] ?> </td>
                <td> <?= $data['total_harga'] ?> </td>
                <td> <?= $data['jenis_pesanan'] ?> </td>
                    <td>

                        <a href="#" class="btn btn-warning">Ubah</a>
                        <a href="#" class="btn btn-danger">Hapus</a>

                    </td>
            </tr>
            <?php endwhile; ?>

        </table>



<!-- Modal -->
<?php include "tambahpesanan.php" ?>
<!-- END -->


  </div>
</div>

  </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>