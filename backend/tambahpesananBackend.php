<?php

    //panggil koneksi
    include "backend/koneksi.php";

    //uji tombol simpan
    if (isset($_POST['bsimpan'])) {

        //prepare simpan data baru
        $simpan = mysqli_query($koneksi, "INSERT INTO pesanan ( id_pesanan, id_pelanggan, id_admin, nama_pelanggan, tanggal_pesanan, catatan, status_pesanan, total_harga, jenis_pesanan)
                                            
                                VALUES  ('$_POST[tidpesanan]',
                                        ('$_POST[tidpelanggan]',
                                        ('$_POST[tnamapelanggan]',
                                        ('$_POST[tidadmin]',
                                        ('$_POST[ttanggalpesanan]',
                                        ('$_POST[tcatatan]',
                                        ('$_POST[tstatuspesanan]',
                                        ('$_POST[ttotalharga]',
                                        ('$_POST[tjenispesanan]') ");


//simpan data 
        if ($simpan) {
            echo "<script>
            alert('Simpan data Sukses!');
            document.location='index.php';
            </script>";
        } else {
            echo "<script>
            alert('Simpan data Gagal!');
            document.location='index.php';
            </script>";
        }

    }   


