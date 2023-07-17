<?php

    //panggil koneksi
    include "koneksi.php";

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
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"> Form Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="aksicrud.php">
      <div class="modal-body">
       
            <div class="mb-3">
            <label class="form-label">ID Pesanan</label>
            <input type="text"  class="form-control" name="tidpelanggan" placeholder="Masukan ID Pesanan!">

            <div class="mb-3">
            <label class="form-label">ID Pelanggan</label>
            <input type="text"  class="form-control" name="tidpelanggan" placeholder="Masukan ID Pelanggan!">

            <div class="mb-3">
            <label class="form-label">ID Admin</label>
            <input type="text" class="form-control" name="tidadmin" placeholder="Masukan ID Admin!">

            <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text"  class="form-control" name="tnamapelanggan" placeholder="Masukan ID Pelanggan!">

            <div class="mb-3">
            <label class="form-label">Tanggal Pesanan</label>
            <input type="date"  class="form-control" name="ttanggalpesanan" placeholder="Masukan Tanggal Pesanan!">

            <div class="mb-3">
            <label class="form-label">Catatan</label>
            <input type="text"  class="form-control" name="tcatatan" placeholder="Masukan Catatan!">

            <div class="mb-3">
            <label class="form-label">Status Pesanan</label>
            <input type="text"  class="form-control" name="tstatuspesanan" placeholder="Masukan Status Pesanan!">

            <div class="mb-3">
            <label class="form-label">Total Harga</label>
            <input type="text"  class="form-control" name="ttotalharga" placeholder="Masukan Total Harga!">

            </div>
            <div class="mb-3">
            <label class="form-label">Jenis Pesanan</label>
            <select class="form-select" name="tjenispesanan">
                <option></option>
                <?php
                include "koneksi_php";
                $query = mysqli_query($koneksi,"SELECT * FROM pesanan ") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($query)){
                          echo "<option value=$data[id_pesanan]> $data[id_pesanan] </option>";
                        }
                        ?>
            </select>

            </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
        
      </div>
      </form>

    </div>
  </div>
</div>
<!-- END -->


  </div>
</div>

  </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>