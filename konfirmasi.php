<?php

    include "koneksi.php";

    if(isset($_GET['id'])){

        $status = $_POST['status'];
        // $id = $_POST['id'];

        $sql_ubah = "UPDATE book_form SET
                    status='".$_POST['status']."'
                    WHERE id='".$_GET['id']."'";

        $query_ubah = mysqli_query($konek, $sql_ubah);
        
        if($query_ubah){
            echo "<script>alert('Konfirmasi Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
        } else {
            echo "<script>alert('Konfirmasi Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=index.php?page=transaction'>";
        }
    } else {
        echo 'ada yang salah coba lagi nanti';
    }

?>