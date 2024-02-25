<?php
    include "koneksi.php";

    if (isset($_POST['send'])){
        //Mulai proses ubah
        $sql_ubah = "UPDATE tb_destinasi SET
                    nm_destinasi='".$_POST['destinasi']."',
                    harga='".$_POST['harga']."'
                    WHERE id_destinasi='".$_POST['id']."'";
        $query_ubah = mysqli_query($konek, $sql_ubah);
        if ($query_ubah){
            echo "<script>alert('Ubah Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        } else {
            echo "<script>alert('Ubah Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
        }
        //Selesai proses ubah
    } else {
        //Mulai proses hapus
        if (isset($_GET['id'])){
           $sql_hapus = "DELETE FROM tb_destinasi WHERE
           id_destinasi='".$_GET['id']."'";
           $query_hapus = mysqli_query($konek, $sql_hapus);
           if ($query_hapus){
            echo "<script>alert('Hapus Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
           } else {
            echo "<script>alert('Hapus Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=admin_panel'>";
           }
        }
        //Selesai proses hapus
    }
?>