<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"> Form Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="backend/tambahpesananBackend.php">
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